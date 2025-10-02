<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Services\FileCacheService;

class CacheManagementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:manage 
                            {action : The action to perform (warm|clear|status)}
                            {--type=all : Type of cache to manage (all|data|files|views)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage application cache for better performance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $action = $this->argument('action');
        $type = $this->option('type');

        switch ($action) {
            case 'warm':
                $this->warmCache($type);
                break;
            case 'clear':
                $this->clearCache($type);
                break;
            case 'status':
                $this->showCacheStatus();
                break;
            default:
                $this->error('Invalid action. Use: warm, clear, or status');
                return 1;
        }

        return 0;
    }

    /**
     * Warm up the cache
     */
    private function warmCache($type)
    {
        $this->info('Warming up cache...');

        if ($type === 'all' || $type === 'data') {
            $this->warmDataCache();
        }

        if ($type === 'all' || $type === 'files') {
            $this->warmFileCache();
        }

        if ($type === 'all' || $type === 'views') {
            $this->warmViewCache();
        }

        $this->info('Cache warmed successfully!');
    }

    /**
     * Clear the cache
     */
    private function clearCache($type)
    {
        $this->info('Clearing cache...');

        if ($type === 'all' || $type === 'data') {
            Cache::flush();
            $this->line('✓ Application cache cleared');
        }

        if ($type === 'all' || $type === 'files') {
            FileCacheService::clearFileCache();
            $this->line('✓ File cache cleared');
        }

        if ($type === 'all' || $type === 'views') {
            $this->call('view:clear');
            $this->line('✓ View cache cleared');
        }

        $this->info('Cache cleared successfully!');
    }

    /**
     * Show cache status
     */
    private function showCacheStatus()
    {
        $this->info('Cache Status:');
        $this->line('');

        // Check conference data cache
        $conferenceData = Cache::get('conference_data');
        $this->line('Conference Data Cache: ' . ($conferenceData ? '✓ Cached' : '✗ Not cached'));

        // Check file metadata cache
        $fileMetadataCache = Cache::get('file_metadata_' . md5('images/header_banenr.png'));
        $this->line('File Metadata Cache: ' . ($fileMetadataCache ? '✓ Active' : '✗ Not active'));

        // Check directory cache
        $dirCache = Cache::get('directory_files_' . md5('images/logo'));
        $this->line('Directory Cache: ' . ($dirCache ? '✓ Active' : '✗ Not active'));

        // Check preloaded images
        $imageCache = Cache::get('preloaded_images_' . md5('images/header_banenr.png,images/header_banenr_mobile.png'));
        $this->line('Preloaded Images: ' . ($imageCache ? '✓ Active' : '✗ Not active'));

        // Show cache driver
        $driver = config('cache.default');
        $this->line('Cache Driver: ' . $driver);
    }

    /**
     * Warm up data cache
     */
    private function warmDataCache()
    {
        $this->line('Warming data cache...');
        
        // Warm conference data
        $controller = new \App\Http\Controllers\ConferenceController();
        $reflection = new \ReflectionClass($controller);
        $method = $reflection->getMethod('getConferenceData');
        $method->setAccessible(true);
        $data = $method->invoke($controller);
        
        Cache::put('conference_data', $data, 86400);
        $this->line('✓ Conference data cached');
    }

    /**
     * Warm up file cache
     */
    private function warmFileCache()
    {
        $this->line('Warming file cache...');
        
        // Cache common image directories
        $imageDirs = ['images/logo', 'images/conference'];
        foreach ($imageDirs as $dir) {
            FileCacheService::getDirectoryFiles($dir);
        }
        
        // Preload common images
        $commonImages = [
            'images/header_banenr.png',
            'images/header_banenr_mobile.png'
        ];
        FileCacheService::preloadImages($commonImages);
        
        $this->line('✓ File cache warmed');
    }

    /**
     * Warm up view cache
     */
    private function warmViewCache()
    {
        $this->line('Warming view cache...');
        $this->call('view:cache');
        $this->line('✓ View cache warmed');
    }
}
