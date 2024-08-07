<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Option\OptionRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class OptionController extends Controller{

    protected $optionRepository;

    public function __construct(OptionRepositoryInterface $optionRepository){
        $this->optionRepository = $optionRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        //
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
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ],
            [
                'required' => 'Dữ liệu không được trống!',
                'max'      => 'Dữ liệu'
            ]);

        if ($validator->fails()){
            if ($request->ajax()){
                return response()->json(['errors' => $validator->errors()], 400);
            }
        }

        $this->optionRepository->create($request->all());

        return response()->json(['data' => 'Tạo thành công'], 200);
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
        //
    }
}
