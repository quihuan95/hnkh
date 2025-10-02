# Cache Optimization System

Hệ thống cache được thiết kế để tối ưu hóa hiệu suất của ứng dụng bằng cách cache dữ liệu và assets.

## Tính năng

### 1. Data Cache
- Cache dữ liệu conference trong 24 giờ
- Cache metadata của files
- Cache danh sách files trong thư mục

### 2. Static Asset Cache
- Cache headers cho static assets (1 năm)
- Cache busting với timestamp
- Compression headers

### 3. HTML Page Cache
- Cache headers cho HTML pages (1 giờ)
- ETag support

### 4. File Management
- File metadata caching
- Directory listing cache
- Image preloading

## Cấu hình

### Environment Variables
```env
# Cache TTL Settings
CACHE_CONFERENCE_DATA_TTL=86400
CACHE_FILE_METADATA_TTL=3600
CACHE_DIRECTORY_FILES_TTL=1800
CACHE_PRELOADED_IMAGES_TTL=7200

# Static Asset Cache
STATIC_CACHE_CONTROL="public, max-age=31536000, immutable"
STATIC_CACHE_EXPIRES=31536000
STATIC_CACHE_ETAG=true

# HTML Page Cache
HTML_CACHE_CONTROL="public, max-age=3600"
HTML_CACHE_EXPIRES=3600
HTML_CACHE_ETAG=true

# Cache Warming
CACHE_WARMING_ENABLED=true
CACHE_WARMING_SCHEDULE="0 2 * * *"
CACHE_WARMING_CONCURRENT=5

# Compression
CACHE_COMPRESSION_ENABLED=true
CACHE_VARY_HEADER="Accept-Encoding"
```

## Sử dụng

### Artisan Commands

#### 1. Warm Cache
```bash
# Warm all cache
php artisan cache:warm

# Force warm (overwrite existing)
php artisan cache:warm --force
```

#### 2. Manage Cache
```bash
# Clear all cache
php artisan cache:manage clear

# Clear specific cache type
php artisan cache:manage clear --type=files

# Show cache status
php artisan cache:manage status

# Warm specific cache type
php artisan cache:manage warm --type=data
```

#### 3. Standard Laravel Commands
```bash
# Clear application cache
php artisan cache:clear

# Clear view cache
php artisan view:clear

# Clear config cache
php artisan config:clear

# Clear route cache
php artisan route:clear
```

### API Endpoints

#### Clear Cache (POST)
```
POST /admin/cache/clear
```

### Services

#### FileCacheService
```php
use App\Services\FileCacheService;

// Get file metadata with cache
$metadata = FileCacheService::getFileMetadata('images/logo.png');

// Get directory files with cache
$files = FileCacheService::getDirectoryFiles('images/logo');

// Preload images
FileCacheService::preloadImages(['images/header.png']);

// Get optimized asset URL with cache busting
$url = FileCacheService::getAssetUrl('images/logo.png');

// Clear file cache
FileCacheService::clearFileCache();
```

### Blade Components

#### Cached Asset Component
```blade
<x-cached-asset 
    src="images/logo.png" 
    alt="Logo" 
    class="w-10 h-10" 
    type="image" 
/>
```

## Cấu trúc Files

```
app/
├── Console/Commands/
│   ├── CacheManagementCommand.php
│   └── WarmCacheCommand.php
├── Http/
│   ├── Controllers/
│   │   └── ConferenceController.php (updated)
│   └── Middleware/
│       └── CacheOptimizationMiddleware.php
└── Services/
    └── FileCacheService.php

config/
└── cache_optimization.php

resources/views/components/
├── cached-asset.blade.php
└── conference-sections.blade.php (updated)
```

## Lợi ích

1. **Hiệu suất**: Giảm thời gian load trang
2. **Bandwidth**: Giảm tải cho server
3. **User Experience**: Tăng tốc độ trải nghiệm người dùng
4. **SEO**: Cải thiện điểm số PageSpeed
5. **Cost**: Giảm chi phí hosting

## Monitoring

### Cache Status
```bash
php artisan cache:manage status
```

### Logs
Cache operations được log trong Laravel logs:
```
storage/logs/laravel.log
```

## Troubleshooting

### Cache không hoạt động
1. Kiểm tra cache driver trong `.env`
2. Kiểm tra permissions của storage directory
3. Chạy `php artisan cache:clear`

### Static assets không được cache
1. Kiểm tra middleware đã được đăng ký
2. Kiểm tra web server configuration
3. Kiểm tra cache headers trong browser dev tools

### Performance không cải thiện
1. Kiểm tra cache hit ratio
2. Tăng TTL cho cache
3. Preload thêm assets

## Best Practices

1. **TTL Settings**: Điều chỉnh TTL phù hợp với content update frequency
2. **Cache Warming**: Chạy cache warming sau mỗi deployment
3. **Monitoring**: Theo dõi cache hit ratio và performance metrics
4. **Cleanup**: Định kỳ clear cache cũ
5. **Testing**: Test cache behavior trong staging environment
