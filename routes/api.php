<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::resource('tenant', \App\Http\Controllers\TenantController::class);

Route::get('products', [ProductController::class, 'index']);
Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
Route::post('product/create', [ProductController::class, 'store']);
Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
Route::post('product/restore/{product}', [ProductController::class, 'restore']);
Route::post('upload-file', [ProductController::class, 'upload'])->name('upload');

//Route::get('products', [ProductController::class, 'index']);
//Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
//Route::post('product/create', [ProductController::class, 'store']);
//Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
//Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
//Route::post('product/restore/{product}', [ProductController::class, 'restore']);
//
//
//Route::get('checkstock', [CheckStockController::class, 'index']);
//Route::get('checkstock/{checkstock}', [CheckStockController::class, 'show']);
//Route::post('checkstock/create', [CheckStockController::class, 'store']);
//Route::put('checkstock/update/{checkstock}', [CheckStockController::class, 'update']);
//Route::delete('checkstock/delete/{checkstock}', [CheckStockController::class, 'cancel']);
//
//
//Route::resource('import-goods', ImportGoodsController::class);
//Route::resource('option', OptionController::class);
//
//Route::resource('customers', CustomerController::class);
//Route::resource('customers', CustomerController::class);
//Route::resource('suppliers', SupplierController::class);
//Route::resource('orders', OrderController::class);
//Route::resource('categories', CategoryController::class);
//Route::resource('brands', BrandController::class);
//Route::resource('job-titles', BrandController::class);
//Route::resource('departments', DepartmentController::class);
//Route::resource('staffs', StaffController::class);
//
//Route::group([
//    'middleware' => 'api',
//    'prefix' => 'auth'
//], function ($router) {
//    Route::post('/register', [AuthController::class, 'register'])->name('register');
//    Route::post('/login', [AuthController::class, 'login'])->name('login');
//    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
//    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
//    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
//});

Route::prefix('auth')->group(function (){
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});