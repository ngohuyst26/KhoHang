<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TikTokShopWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhook/tiktok-shop', [TikTokShopWebhookController::class, 'handle']);
Route::get('/admin', function (){
    return view('pages.admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
