<?php
use App\Http\Controllers\Sale\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');