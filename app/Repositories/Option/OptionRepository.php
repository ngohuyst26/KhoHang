<?php

namespace App\Repositories\Option;

use App\Models\Option;
use App\Repositories\BaseRepository;
use Exception;

class OptionRepository extends BaseRepository implements OptionRepositoryInterface{

    public function __construct(Option $model){
        parent::__construct($model);
    }

    public function getAllOption(){
        try{
            return Option::where('status', 1)->get();
        }catch (Exception $e){
            return response()->json([
                'status'  => FALSE,
                'message' => 'Đã có lỗi sảy ra!',
                'detail'  => $e
            ], 400);
        }
    }
}
