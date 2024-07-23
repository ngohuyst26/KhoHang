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
Route::get('/ListCate', [CategoryController::class, 'list'])->name('admin.ListCate');
Route::get('/EditCate/{id}', [CategoryController::class, 'edit'])->name('admin.edit');
Route::put('/UpdateCate/{id}', [CategoryController::class, 'update'])->name('admin.update');
Route::delete('/DeleteCate/{id}', [CategoryController::class, 'delete'])->name('admin.delete');

Route::resource('customers', CustomerController::class);
