<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryRepository->all();
        return response()->json([
            'status'  => true,
            'message' => "Danh sách loại hàng",
            'data'    => $categories
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
            $categories = $this->categoryRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $categories
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
            $category = $this->categoryRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết loại hàng",
                'data'    => $category
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết loại hàng",
                'data'    => "Không tìm thấy loại hàng"
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
                $category = $this->categoryRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Cập nhật thành công",
                    'data'    => $category
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
                'message' => "Chi tiết loại hàng",
                'data'    => "Không tìm thấy loại hàng"
            ],404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = $this->categoryRepository->delete($id);
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
