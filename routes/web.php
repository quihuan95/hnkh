<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conference.index');
Route::get('/conference', [App\Http\Controllers\ConferenceController::class, 'index'])->name('conference.index');
