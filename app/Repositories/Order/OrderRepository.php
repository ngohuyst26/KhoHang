<?php

namespace App\Repositories\Order;

use App\Models\Orders;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface{
    protected $model;

    public function __construct(Orders $model){
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}