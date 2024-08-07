<?php

namespace App\Repositories\CheckStock;

use App\Models\CheckStock;
use App\Repositories\BaseRepository;

class CheckStockRepository extends BaseRepository implements CheckStockRepositoryInterface{

    public function __construct(CheckStock $model){
        parent::__construct($model);
    }
}
