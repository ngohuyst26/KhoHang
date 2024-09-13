<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = $this->customerRepository->all();
        return response()->json([
            'status'  => true,
            'message' => "Danh sách khách hàng",
            'data'    => $customers
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $customers = $this->customerRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $customers
            ],201);
        }
        catch (ValidationException $e){
            return response()->json([
                'status'  => false,
                'message' => "Lỗi",
                'data'    => $e->validator->errors()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $customer = $this->customerRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết khách hàng",
                'data'    => $customer
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết khách hàng",
                'data'    => "Không tìm thấy khách hàng"
            ],404);
        }

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
        try {
            try {
                $customer = $this->customerRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Đã cập nhật thông tin khách hàng",
                    'data'    => $customer
                ],200);
            }
            catch (ValidationException $e){
                return response()->json([
                    'status'  => false,
                    'message' => "Cập nhật thất bại",
                    'data'    => $e->validator->errors()
                ],400);
            }
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết khách hàng",
                'data'    => "Không tìm thấy khách hàng"
            ],404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $customer = $this->customerRepository->delete($id);
            return response()->json([
                'status'  => true,
                'message' => "Đã xóa thông tin khách hàng",
                'data'    => []
            ],200);
        }
        catch (ModelNotFoundException $e){
            return response()->json([
                'status'  => false,
                'message' => "Xóa thất bại",
                'data'    => []
            ],404);
        }
    }
}
