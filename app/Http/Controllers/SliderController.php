<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return response()->json([
            'status' => TRUE,
            'data'   => Slider::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        if ($request->hasFile('image')){
            $files = $request->file('image');
            $paths = [];
            foreach ($files as $file){
                $uniqueFileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $path           = $file->storeAs(
                    'slider/' . date('Y/m'),
                    $uniqueFileName,
                    'public'
                );
                $paths[]        = $path;
                $alt_text       = '';
                if ($request->has('alt_text')){
                    $alt_text = $request->alt_text;
                }
                Slider::create([
                    'img_url'  => $path,
                    'alt_text' => $alt_text
                ]);
            }

            return response()->json([
                'status'  => TRUE,
                'message' => 'Thêm hình ảnh thành công !',
                'slide'   => $paths
            ]);
        }

        return response()->json([
            'status'  => TRUE,
            'message' => 'Thêm hình ảnh thất bại!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        try{
            Slider::destroy($id);

            return response()->json([
                'status'  => TRUE,
                'message' => 'Xóa thành công!'
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Xóa thất bại!'
            ]);
        }
    }
}
