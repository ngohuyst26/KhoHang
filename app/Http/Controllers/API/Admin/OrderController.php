<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Orders;
use App\Repositories\Order\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;
    public  function __construct(OrderRepositoryInterface $orderRepository){
        $this->orderRepository = $orderRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = $this->orderRepository->filter( $request->keyword, $request->limit,$request->status);
        return response()->json([
            'status'  => true,
            'message' => 'Danh sách đơn hàng',
            'data'    => $orders
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = $this->orderRepository->create($request->all());
        foreach ($request->order_items as $item){
            $order->orderItems()->create([
                'order_id'       => $order->id,
                'product_sku_id' => $item['product_sku_id'],
                'quantity'       => $item['quantity'],
                'unit_amount'    => $item['unit_amount'],
                'total_amount'   => $item['total_amount'],
            ]);
        }

        return response()->json([
            'status'  => true,
            'message' => "Đã thêm đơn hàng",
            'data'    => $order
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = $this->orderRepository->getOrder($id);
        if ($order === NULL){
            return response()->json([
                'status'  => false,
                'message' => "Không tìm thấy đơn hàng",
                'data'    => ""
            ],404);
        }
        return response()->json([
            'status'  => true,
            'message' => "Chi tiết đơn hàng",
            'data'    => $order
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->orderRepository->update($id,[
            'user_id'           =>$request->user_id,
            'total_payment'     =>$request->total_payment,
            'payment_method_id' =>$request->payment_method_id,
            'notes'             =>$request->notes,
        ]);

        $order = Orders::findOrFail($id);
        $orderItemIds = collect($request->order_items)->pluck('product_sku_id');
        $order->orderItems()->whereNotIn('product_sku_id', $orderItemIds)->delete();
        foreach ($request->order_items as $item){
            $order->orderItems()->updateOrCreate(
                [
                    'product_sku_id' => $item['product_sku_id'],
                ],
                [
                    'order_id'       => $order->id,
                    'quantity'       => $item['quantity'],
                    'unit_amount'    => $item['unit_amount'],
                    'total_amount'   => $item['total_amount'],
                ]
            );
        }

        return response()->json([
            'status'  => true,
            'message' => "Cập nhật thành công",
            'data'    => ""
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $this->orderRepository->delete($id);
        }catch (\Exception $e){
            return response()->json([
                'status'  => false,
                'message' => "Không tồn tại mã đơn hàng",
            ],404);
        }
        return response()->json([
            'status'  => true,
            'message' => "Xóa thành công",
            'data'    => ""
        ],200);
    }

    public function restore(int $id){
        try{
            $this->orderRepository->restore($id);
        }catch (\Exception $e){
            return response()->json([
                'status'  => false,
                'message' => "Không tồn tại mã đơn hàng",
            ],404);
        }

        return response()->json([
            'status'  => true,
            'message' => "Khôi phục thành công",
            'data'    => ""
        ],200);
    }
}
