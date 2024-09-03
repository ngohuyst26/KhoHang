<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CheckStock;
use App\Models\DetailCheckStock;
use App\Models\ProductSku;
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
        if ($request->has('cart')){
            $checkStock       = $this->checkStockRepository->create([]);
            $ac_number        = 0;
            $ac_total         = 0;
            $total_difference = 0;
            $qty_increased    = 0;
            $qty_decreased    = 0;
            foreach ($request->cart as $cart){
                $sku = ProductSku::find($cart['sku_id']);

                DetailCheckStock::create([
                    'check_stock_id'   => $checkStock->id,
                    'product_sku_id'   => $sku->id,
                    'stock'            => $sku->inventory,
                    'ac_number'        => $cart['quantity'],
                    'total_difference' => $cart['quantity'] - $sku->inventory,
                    'value'            => $sku->price * ($cart['quantity'] - $sku->inventory)
                ]);
                $ac_number        += $cart['quantity'];
                $ac_total         += $sku->price * ($cart['quantity'] - $sku->inventory);
                $total_difference += $cart['quantity'] - $sku->inventory;
                $qty_increased    += ($sku->inventory < $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);
                $qty_decreased    += ($sku->inventory > $cart['quantity'] ? $cart['quantity'] - $sku->inventory : 0);

                if ($request->status == 2){
                    $sku->update([
                        'inventory' => $cart['quantity']
                    ]);
                }
            }
            $this->checkStockRepository->update($checkStock->id, [
                'ac_number'        => $ac_number,
                'ac_total'         => $ac_total,
                'total_difference' => $total_difference,
                'qty_increased'    => $qty_increased,
                'qty_decreased'    => $qty_decreased,
            ]);

            return response()->json([
                "data" => [
                    'status'  => 201,
                    'message' => 'Thêm kiểm kho thành công'
                ]
            ], 201);
        }

        return response()->json([
            "data" => [
                'status'  => 400,
                'message' => 'Thêm kiểm kho thất bại đã có lỗi xảy ra!'
            ]
        ], 400);
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }
}
