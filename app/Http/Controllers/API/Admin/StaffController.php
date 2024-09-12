<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Staff\StaffRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class StaffController extends Controller
{
    protected $staffRepository;

    public function __construct(StaffRepositoryInterface $staffRepository){
        $this->staffRepository = $staffRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = $this->staffRepository->all();

        return response()->json([
            'status'  => true,
            'message' => "Danh sách nhân viên",
            'data'    => $staffs
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $staff = $this->staffRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $staff
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
            $staff = $this->staffRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Thông tin nhân viên",
                'data'    => $staff
            ], 200);
        }
        catch(ModelNotFoundException $exception){
            return response()->json([
                'status'  => false,
                'message' => "Không tồn tại nhân viên",
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
            $customer = $this->staffRepository->update($id, $request->all());
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->staffRepository->delete($id);
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
