<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cache Optimization Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains configuration options for cache optimization
    | features in the application.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Cache TTL (Time To Live) Settings
    |--------------------------------------------------------------------------
    */
    'ttl' => [
        'conference_data' => env('CACHE_CONFERENCE_DATA_TTL', 86400), // 24 hours
        'file_metadata' => env('CACHE_FILE_METADATA_TTL', 3600), // 1 hour
        'directory_files' => env('CACHE_DIRECTORY_FILES_TTL', 1800), // 30 minutes
        'preloaded_images' => env('CACHE_PRELOADED_IMAGES_TTL', 7200), // 2 hours
    ],

    /*
    |--------------------------------------------------------------------------
    | Static Asset Cache Settings
    |--------------------------------------------------------------------------
    */
    'static_assets' => [
        'cache_control' => env('STATIC_CACHE_CONTROL', 'public, max-age=31536000, immutable'),
        'expires' => env('STATIC_CACHE_EXPIRES', 31536000), // 1 year
        'etag' => env('STATIC_CACHE_ETAG', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | HTML Page Cache Settings
    |--------------------------------------------------------------------------
    */
    'html_pages' => [
        'cache_control' => env('HTML_CACHE_CONTROL', 'public, max-age=3600'),
        'expires' => env('HTML_CACHE_EXPIRES', 3600), // 1 hour
        'etag' => env('HTML_CACHE_ETAG', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | File Extensions to Cache
    |--------------------------------------------------------------------------
    */
    'cacheable_extensions' => [
        'css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'pdf',
        'woff', 'woff2', 'ttf', 'eot'
    ],

    /*
    |--------------------------------------------------------------------------
    | Directories to Preload
    |--------------------------------------------------------------------------
    */
    'preload_directories' => [
        'images/logo',
        'images/conference',
        'files',
    ],

    /*
    |--------------------------------------------------------------------------
    | Common Images to Preload
    |--------------------------------------------------------------------------
    */
    'preload_images' => [
        'images/header_banenr.png',
        'images/header_banenr_mobile.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Warming Settings
    |--------------------------------------------------------------------------
    */
    'warming' => [
        'enabled' => env('CACHE_WARMING_ENABLED', true),
        'schedule' => env('CACHE_WARMING_SCHEDULE', '0 2 * * *'), // Daily at 2 AM
        'concurrent' => env('CACHE_WARMING_CONCURRENT', 5),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compression Settings
    |--------------------------------------------------------------------------
    */
    'compression' => [
        'enabled' => env('CACHE_COMPRESSION_ENABLED', true),
        'vary_header' => env('CACHE_VARY_HEADER', 'Accept-Encoding'),
    ],
];
