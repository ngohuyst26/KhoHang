<?php

use App\Http\Controllers\TikTokController;
use App\Http\Controllers\TikTokWebhookController;
use Illuminate\Support\Facades\Route;

//Route::get('products', [ProductController::class, 'index']);
//Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
//Route::post('product/create', [ProductController::class, 'store']);
//Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
//Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
//Route::post('product/restore/{product}', [ProductController::class, 'restore']);
//Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');

Route::resource('tenant', \App\Http\Controllers\TenantController::class);

Route::get('/monthly-user-registrations', [\App\Http\Controllers\TenantController::class, 'monthlyUserRegistrations']);


Route::get('/tik-tok-callback', [TikTokController::class, 'handleCallback'])
     ->name('tiktok.callback');
Route::post('tiktok-link-account', [TikTokWebhookController::class, 'handleLinkAccount']);
Route::post('tiktok-webhook', [TikTokWebhookController::class, 'handleFBTInventoryUpdate']);

