<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);
//    Route::get('/admin/customers/{customer}/{skuId}/edit', [ProductController::class, 'edit']);
Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');

