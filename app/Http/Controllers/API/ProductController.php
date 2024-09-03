<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller{

    protected $productRepository;
    protected $checkStockRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CheckStockRepositoryInterface $stockRepository
    ){
        $this->productRepository    = $productRepository;
        $this->checkStockRepository = $stockRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return $this->productRepository->getAll(5);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request){


        $skuIds = $this->productRepository->addProductApi($request);

        return response()->json([
            'message' => 'Product created successfully',
            'sku_ids' => $skuIds,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $skuId){
        $product = $this->productRepository->getOneSku($id, $skuId);
        if ($product->productSku->isEmpty()){
            return response()->json([
                "data" => [
                    'code'    => 404,
                    'message' => 'Sản phẩm không tồn tại'
                ]
            ], 404);
        }

        return response()->json([
            "data" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, $skuId){
        return $this->productRepository->updateProductSku($request, $id, $skuId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        return $this->productRepository->deleteProduct($id);
    }

    public function restore(string $id){
        return $this->productRepository->restoreProduct($id);
    }
}