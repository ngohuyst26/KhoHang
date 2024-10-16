<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Supplier\SupplierRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SupplierController extends Controller
{
    protected $supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository){
        $this->supplierRepository = $supplierRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $suppliers = $this->supplierRepository->filter($request);

        return response()->json([
            'status'  => true,
            'message' => "Danh sách nhà cung cấp",
            'data'    => $suppliers
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $supplier = $this->supplierRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $supplier
            ], 200);
        }
        catch(ValidationException $e){
            return response()->json([
                'status'  => false,
                'message' => "Thêm thất bại",
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
            $supplier = $this->supplierRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Thông tin nhà cung cấp",
                'data'    => $supplier
            ], 200);
        }
        catch(ModelNotFoundException $exception){
            return response()->json([
                'status'  => false,
                'message' => "Không tồn tại nhà cung cấp",
                'data'    => []
            ], 404);
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
                $customer = $this->supplierRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Cập nhật thành công",
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
        catch(ModelNotFoundException $exception){
            return response()->json([
                'status'  => false,
                'message' => "Không tồn tại nhà cung cấp",
                'data'    => []
            ], 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->supplierRepository->delete($id);
            return response()->json([
                'status'  => true,
                'message' => "Xóa thành công",
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
