<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionRequest;
use App\Repositories\Option\OptionRepositoryInterface;
use Exception;

class OptionController extends Controller{

    protected $optionRepository;

    public function __construct(OptionRepositoryInterface $optionRepository){
        $this->optionRepository = $optionRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        try{
            $option = $this->optionRepository->getAllOption();

            return response()->json([
                'status' => TRUE,
                'data'   => $option,
            ], 201);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request){
        try{
            $option = $this->optionRepository->create([
                'name' => $request->name
            ]);

            return response()->json([
                'status'  => TRUE,
                'data'    => $option,
                'message' => 'Tạo thành công!'
            ], 201);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        try{
            $option = $this->optionRepository->find($id);

            return response()->json([
                'status' => TRUE,
                'data'   => $option,
            ], 201);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        try{
            return $this->optionRepository->find($id);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionRequest $request, string $id){
        try{
            $this->optionRepository->update($id, [
                'name' => $request->name
            ]);
            $option = $this->optionRepository->find($id);

            return response()->json([
                'status'  => TRUE,
                'data'    => $option,
                'message' => 'Cập nhật thành công!'
            ], 200);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        try{
            $this->optionRepository->update($id, [
                'status' => 2
            ]);

            return response()->json([
                'status'  => TRUE,
                'message' => 'Xóa thành công!'
            ], 200);
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }

}
