@props(['src', 'alt' => '', 'class' => '', 'type' => 'image', 'loading' => 'lazy'])

@php
    use App\Services\FileCacheService;
    
    // Get cached asset metadata
    $metadata = FileCacheService::getFileMetadata($src);
    $optimizedUrl = FileCacheService::getAssetUrl($src);
@endphp

@if($type === 'image')
    <img 
        src="{{ $optimizedUrl }}" 
        alt="{{ $alt }}" 
        class="{{ $class }}"
        loading="{{ $loading }}"
        @if($metadata)
            width="{{ $metadata['size'] > 50000 ? 'auto' : '100%' }}"
            data-size="{{ $metadata['size'] }}"
        @endif
        onerror="this.style.display='none'"
    />
@elseif($type === 'file')
    <a href="{{ $optimizedUrl }}" 
       class="{{ $class }}"
       target="_blank"
       @if($metadata)
           data-size="{{ $metadata['size'] }}"
           data-type="{{ $metadata['mime'] }}"
       @endif>
        {{ $slot }}
    </a>
@elseif($type === 'background')
    <div class="{{ $class }}" 
         style="background-image: url('{{ $optimizedUrl }}');"
         @if($metadata)
             data-size="{{ $metadata['size'] }}"
         @endif>
        {{ $slot }}
    </div>
@endif
