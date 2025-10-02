<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conference.index');
Route::get('/conference', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conference.index');

// Cache management routes (add authentication in production)
Route::post('/admin/cache/clear', [App\Http\Controllers\ConferenceController::class, 'clearCache'])->name('cache.clear');
