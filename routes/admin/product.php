<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/trash', [ProductController::class, 'trash'])->name('products.trash');
Route::resource('products', ProductController::class);
Route::get('/products/{product}/{skuId}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{product}/{skuId}', [ProductController::class, 'update'])->name('sku.update');
Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');
Route::post('/delete-photo', [ProductController::class, 'deletePhoto'])->name('delete.photo');
Route::post('/clear-temporary-files', [ProductController::class, 'clearTemporaryFiles'])->name('clear_temporary_files');
