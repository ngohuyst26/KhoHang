<?php

namespace Module\Products\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Product;
use Module\Products\Models\Products;

class ProductsController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index(){

        $products = Product::with(['productSku.optionValue.option'])->get();

        return view('Products::index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request){
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products){
        //
    }
}
