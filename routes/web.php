<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function (){
    Route::get('/', function (){
        return view('pages.admin.dashboard.index');
    });
    Route::name('category.')->prefix('category')->group(function (){
        Route::get('/add', [CategoryController::class, 'addCategory'])->name(('add'));
        Route::post('/add', [CategoryController::class, 'store'])->name('store');
        Route::get('/list', [CategoryController::class, 'list'])->name('list');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });


    Route::resource('customers', CustomerController::class);
    Route::resource('products', ProductController::class);
    Route::post('upload-file', [PhotoController::class, 'upload'])->name('upload');

});
