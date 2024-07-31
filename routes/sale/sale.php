<?php
use App\Http\Controllers\Sale\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return redirect()->route('sale.index');
});
Route::resource('/sale', SaleController::class);
Route::get('search',[SaleController::class,'search'])->name('search');