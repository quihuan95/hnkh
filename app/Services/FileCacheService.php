<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileCacheService
{
    /**
     * Cache file metadata for better performance
     */
    public static function getFileMetadata($filePath, $cacheTime = 3600)
    {
        $cacheKey = 'file_metadata_' . md5($filePath);
        
        return Cache::remember($cacheKey, $cacheTime, function () use ($filePath) {
            $fullPath = public_path($filePath);
            
            if (!File::exists($fullPath)) {
                return null;
            }

            return [
                'size' => File::size($fullPath),
                'modified' => File::lastModified($fullPath),
                'mime' => File::mimeType($fullPath),
                'url' => asset($filePath),
                'exists' => true
            ];
        });
    }

    /**
     * Cache directory listing for better performance
     */
    public static function getDirectoryFiles($directory, $cacheTime = 1800)
    {
        $cacheKey = 'directory_files_' . md5($directory);
        
        return Cache::remember($cacheKey, $cacheTime, function () use ($directory) {
            $fullPath = public_path($directory);
            
            if (!File::isDirectory($fullPath)) {
                return [];
            }

            $files = [];
            foreach (File::files($fullPath) as $file) {
                $relativePath = str_replace(public_path() . '/', '', $file->getPathname());
                $files[] = [
                    'name' => $file->getFilename(),
                    'path' => $relativePath,
                    'size' => $file->getSize(),
                    'modified' => $file->getMTime(),
                    'url' => asset($relativePath)
                ];
            }

            return $files;
        });
    }

    /**
     * Preload and cache image data for faster rendering
     */
    public static function preloadImages($imagePaths, $cacheTime = 7200)
    {
        $cacheKey = 'preloaded_images_' . md5(implode(',', $imagePaths));
        
        return Cache::remember($cacheKey, $cacheTime, function () use ($imagePaths) {
            $images = [];
            
            foreach ($imagePaths as $path) {
                $metadata = self::getFileMetadata($path);
                if ($metadata && str_starts_with($metadata['mime'], 'image/')) {
                    $images[$path] = $metadata;
                }
            }
            
            return $images;
        });
    }

    /**
     * Clear all file-related cache
     */
    public static function clearFileCache()
    {
        // Clear file metadata cache - using cache tags or manual clearing
        // Since we're using database cache driver, we'll clear specific keys
        $directories = config('cache_optimization.preload_directories', []);
        foreach ($directories as $directory) {
            Cache::forget('directory_files_' . md5($directory));
        }

        $images = config('cache_optimization.preload_images', []);
        if (!empty($images)) {
            Cache::forget('preloaded_images_' . md5(implode(',', $images)));
        }

        // Clear common file metadata
        $commonFiles = [
            'images/header_banenr.png',
            'images/header_banenr_mobile.png'
        ];
        
        foreach ($commonFiles as $file) {
            Cache::forget('file_metadata_' . md5($file));
        }

        return true;
    }

    /**
     * Get optimized asset URL with cache busting
     */
    public static function getAssetUrl($path, $useCacheBusting = true)
    {
        $url = asset($path);
        
        if ($useCacheBusting) {
            $metadata = self::getFileMetadata($path);
            if ($metadata) {
                $url .= '?v=' . $metadata['modified'];
            }
        }
        
        return $url;
    }
}
