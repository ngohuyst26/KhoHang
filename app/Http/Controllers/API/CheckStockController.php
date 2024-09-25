<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CheckStock;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class CheckStockController extends Controller{

    protected $productRepository;
    protected $checkStockRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CheckStockRepositoryInterface $stockRepository){
        $this->productRepository    = $productRepository;
        $this->checkStockRepository = $stockRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return CheckStock::with(['detailStock.productSku.product', 'detailStock.productSku.optionValue.option'])
                         ->orderBy('id', 'DESC')
                         ->paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        return $this->checkStockRepository->createCheckStock($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        return $this->checkStockRepository->getOneCheckStock($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        return $this->checkStockRepository->updateCheckStock($request, $id);
    }

    public function cancel($id){
        return $this->checkStockRepository->cancelCheckStock($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }
}
