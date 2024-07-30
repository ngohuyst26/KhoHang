<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupplierController;

Route::name('supplier.')->prefix('supplier')->group(function () {
    Route::get('/add', [SupplierController::class, 'addSupplier'])->name('add');
    Route::post('/add', [SupplierController::class, 'store'])->name('store');
    Route::get('/list', [SupplierController::class, 'list'])->name('list');
    Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SupplierController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SupplierController::class, 'delete'])->name('delete');
});