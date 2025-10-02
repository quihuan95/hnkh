<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Services\FileCacheService;

class WarmCacheCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:warm {--force : Force warm even if cache exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Warm up application cache for better performance';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (!$this->option('force') && Cache::has('conference_data')) {
            $this->info('Cache already exists. Use --force to overwrite.');
            return 0;
        }

        $this->info('Warming up cache...');

        // Warm conference data
        $this->warmConferenceData();

        // Warm file cache
        $this->warmFileCache();

        // Warm view cache
        $this->warmViewCache();

        $this->info('Cache warmed successfully!');
        return 0;
    }

    /**
     * Warm conference data cache
     */
    private function warmConferenceData()
    {
        $this->line('Warming conference data cache...');
        
        $controller = new \App\Http\Controllers\ConferenceController();
        $reflection = new \ReflectionClass($controller);
        $method = $reflection->getMethod('getConferenceData');
        $method->setAccessible(true);
        $data = $method->invoke($controller);
        
        Cache::put('conference_data', $data, config('cache_optimization.ttl.conference_data'));
        $this->line('✓ Conference data cached for ' . config('cache_optimization.ttl.conference_data') . ' seconds');
    }

    /**
     * Warm file cache
     */
    private function warmFileCache()
    {
        $this->line('Warming file cache...');
        
        // Cache common directories
        $directories = config('cache_optimization.preload_directories', []);
        foreach ($directories as $directory) {
            FileCacheService::getDirectoryFiles($directory);
            $this->line("✓ Directory {$directory} cached");
        }
        
        // Preload common images
        $images = config('cache_optimization.preload_images', []);
        if (!empty($images)) {
            FileCacheService::preloadImages($images);
            $this->line('✓ Common images preloaded');
        }
    }

    /**
     * Warm view cache
     */
    private function warmViewCache()
    {
        $this->line('Warming view cache...');
        $this->call('view:cache');
        $this->line('✓ View cache warmed');
    }
}
