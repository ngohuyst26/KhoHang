<?php
use App\Http\Controllers\Sale\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
//    $products = \App\Models\Product::with(['productSku','productSku.optionValue.option'])->get();
//    dd($products->first()->productSku);
    return redirect()->route('sale.sale.index');
});
Route::resource('/sale', SaleController::class);
Route::get('search',[SaleController::class,'search'])->name('search');