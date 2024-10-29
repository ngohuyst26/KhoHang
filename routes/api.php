<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::resource('tenant', \App\Http\Controllers\TenantController::class);

Route::prefix('auth')->group(function (){
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});