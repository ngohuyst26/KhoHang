<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/trash', [ProductController::class, 'trash'])->name('products.trash');
Route::get('/search-products', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{product}/{skuId}/add-variant', [ProductController::class, 'addVariant'])
     ->name('products.add-variant');
Route::post('/products/{product}/{skuId}/add', [ProductController::class, 'add'])->name('sku.add');
Route::get('/products/{product}/{skuId}/edit', [ProductController::class, 'edit'])
     ->name('sku.edit');
Route::post('/products/{product}/{skuId}', [ProductController::class, 'update'])
     ->name('sku.update');
Route::resource('products', ProductController::class);
Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');
Route::post('/delete-photo', [ProductController::class, 'deletePhoto'])->name('delete.photo');
Route::post('/clear-temporary-files', [ProductController::class, 'clearTemporaryFiles'])
     ->name('clear_temporary_files');
