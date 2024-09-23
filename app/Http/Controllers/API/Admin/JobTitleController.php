<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\JobTitle\JobTitleRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class JobTitleController extends Controller
{
    protected $jobTitleRepository;

    public function __construct(JobTitleRepositoryInterface $jobTitleRepository)
    {
        $this->jobTitleRepository = $jobTitleRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $job_titles = $this->jobTitleRepository->filter( $request->keyword, $request->limit,$request->status);
        return response()->json([
            'status'  => true,
            'message' => "Danh sách chức danh",
            'data'    => $job_titles
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
            $job_titles = $this->jobTitleRepository->create($request->all());
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $job_titles
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
            $job_title = $this->jobTitleRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết chức danh",
                'data'    => $job_title
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết chức danh",
                'data'    => "Không tìm thấy chức danh"
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
                $job_title = $this->jobTitleRepository->update($id, $request->all());
                return response()->json([
                    'status'  => true,
                    'message' => "Cập nhật thành công",
                    'data'    => $job_title
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
                'message' => "Không tìm thấy chức danh",
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
            $this->jobTitleRepository->delete($id);
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
