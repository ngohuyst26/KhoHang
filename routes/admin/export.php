<?php
use App\Http\Controllers\Admin\OrderExportController;
use Illuminate\Support\Facades\Route;

Route::get('export-orders', [OrderExportController::class, 'export'])->name('exportOrder');
