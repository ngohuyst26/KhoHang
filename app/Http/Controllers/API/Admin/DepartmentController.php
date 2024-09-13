<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Department\DepartmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DepartmentController extends Controller
{
    protected $departmentRepository;

    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = $this->departmentRepository->all();
        return response()->json([
            'status'  => true,
            'message' => "Danh sách phòng ban",
            'data'    => $departments
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $departments = $this->departmentRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $departments
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
            $department = $this->departmentRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết phòng ban",
                'data'    => $department
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết phòng ban",
                'data'    => "Không tìm thấy phòng ban"
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
                $department = $this->departmentRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Cập nhật thành công",
                    'data'    => $department
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
                'message' =>  "Không tìm thấy phòng ban",
                'data'    => []
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->departmentRepository->delete($id);
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
