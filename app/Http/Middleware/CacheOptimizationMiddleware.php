<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheOptimizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add cache headers for static assets
        if ($this->isStaticAsset($request)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
        }

        // Add cache headers for HTML pages
        if ($request->is('/') || $request->is('conference')) {
            $response->headers->set('Cache-Control', 'public, max-age=3600');
            $response->headers->set('ETag', md5($response->getContent()));
        }

        // Add compression headers
        $response->headers->set('Vary', 'Accept-Encoding');

        return $response;
    }

    /**
     * Check if the request is for a static asset
     */
    private function isStaticAsset(Request $request): bool
    {
        $path = $request->path();
        
        return str_ends_with($path, '.css') ||
               str_ends_with($path, '.js') ||
               str_ends_with($path, '.png') ||
               str_ends_with($path, '.jpg') ||
               str_ends_with($path, '.jpeg') ||
               str_ends_with($path, '.gif') ||
               str_ends_with($path, '.svg') ||
               str_ends_with($path, '.ico') ||
               str_ends_with($path, '.pdf') ||
               str_starts_with($path, 'images/') ||
               str_starts_with($path, 'files/') ||
               str_starts_with($path, 'build/');
    }
}
