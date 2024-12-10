<?php

use App\Http\Controllers\TikTokController;
use App\Http\Controllers\TikTokWebhookController;
use Illuminate\Support\Facades\Route;

Route::resource('tenant', \App\Http\Controllers\TenantController::class);

Route::get('/monthly-user-registrations', [\App\Http\Controllers\TenantController::class, 'monthlyUserRegistrations']);

//Route::get('/delete-tenant/{id}', [\App\Http\Controllers\TenantController::class, 'destroy']);

Route::get('/tik-tok-callback', [TikTokController::class, 'handleCallback'])
     ->name('tiktok.callback');
Route::post('tiktok-link-account', [TikTokWebhookController::class, 'handleLinkAccount']);
Route::post('tiktok-webhook', [TikTokWebhookController::class, 'handleFBTInventoryUpdate']);

