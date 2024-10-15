<?php

namespace App\Http\Controllers\API\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class BrandController extends Controller
{
    protected $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = $this->brandRepository->filter( $request->keyword, $request->limit,$request->status);
        return response()->json([
            'status'  => true,
            'message' => "Danh sách thương hiệu",
            'data'    => $brands
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
            $brands = $this->brandRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $brands
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
            $brand = $this->brandRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết thương hiệu",
                'data'    => $brand
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết thương hiệu",
                'data'    => "Không tìm thấy thương hiệu"
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
                $brand = $this->brandRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Cập nhật thành công",
                    'data'    => $brand
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
                'message' => "Không tìm thấy thương hiệu",
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
            $category = $this->brandRepository->delete($id);
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
