<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::name('category.')->prefix('category')->group(function () {
    Route::get('/add', [CategoryController::class, 'addCategory'])->name(('add'));
    Route::post('/add', [CategoryController::class, 'store'])->name('store');
    Route::get('/list', [CategoryController::class, 'list'])->name('list');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
});

