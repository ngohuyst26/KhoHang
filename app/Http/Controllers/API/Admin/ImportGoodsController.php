<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportGoodsRequest;
use App\Repositories\ImportGoods\ImportGoodsRepositoryInterface;
use Illuminate\Http\Request;

class ImportGoodsController extends Controller{

    protected $importGoodsRepository;

    public function __construct(ImportGoodsRepositoryInterface $importGoodsRepository){
        $this->importGoodsRepository = $importGoodsRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return $this->importGoodsRepository->getAll();
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
    public function store(ImportGoodsRequest $request){
        return $this->importGoodsRepository->createImportGoods($request);
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
        return $this->importGoodsRepository->updateImportGoods($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }
}
