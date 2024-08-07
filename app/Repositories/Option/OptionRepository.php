<?php

namespace App\Repositories\Option;

use App\Models\Option;
use App\Repositories\BaseRepository;

class OptionRepository extends BaseRepository implements OptionRepositoryInterface{

    public function __construct(Option $model){
        parent::__construct($model);
    }
}
