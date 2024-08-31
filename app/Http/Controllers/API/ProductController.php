<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller{

    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = $this->productRepository->getAll(5);

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request){
        return response()->json([
            'status'  => $this->productRepository->addProductApi($request),
            'message' => 'Thêm sản phẩm thành công'
        ],
            201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }
}
