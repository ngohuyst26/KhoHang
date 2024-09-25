<?php

use App\Http\Controllers\API\Admin\BrandController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\CustomerController;
use App\Http\Controllers\API\Admin\DepartmentController;
use App\Http\Controllers\API\Admin\OrderController;
use App\Http\Controllers\API\Admin\StaffController;
use App\Http\Controllers\API\Admin\SupplierController;
use App\Http\Controllers\Api\CheckStockController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index']);
Route::get('product/{product}/{skuId}', [ProductController::class, 'show']);
Route::post('product/create', [ProductController::class, 'store']);
Route::put('product/update/{product}/{skuId}', [ProductController::class, 'update']);
Route::delete('product/delete/{product}', [ProductController::class, 'destroy']);
Route::post('product/restore/{product}', [ProductController::class, 'restore']);


Route::get('checkstock', [CheckStockController::class, 'index']);
Route::get('checkstock/{checkstock}', [CheckStockController::class, 'show']);
Route::post('checkstock/create', [CheckStockController::class, 'store']);
Route::put('checkstock/update/{checkstock}', [CheckStockController::class, 'update']);
Route::delete('checkstock/delete/{checkstock}', [CheckStockController::class, 'cancel']);

Route::resource('customers', CustomerController::class);
Route::resource('customers', CustomerController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('orders',OrderController::class);
Route::resource('categories',CategoryController::class);
Route::resource('brands',BrandController::class);
Route::resource('job-titles',BrandController::class);
Route::resource('departments',DepartmentController::class);
Route::resource('staffs',StaffController::class);