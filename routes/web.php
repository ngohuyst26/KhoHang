<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::get('/AddCate',[CategoryController::class,'AddCate']) ->name(('admin.AddCate'));
Route::post('/AddCate', [CategoryController::class, 'store'])->name('admin.store');

Route::resource('customers', CustomerController::class);
