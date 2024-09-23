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

    public function filter($keyword = '',$limit = 10, $status = '1')
    {
        $brands = $this->model->orderBy('id', 'DESC');

        if(!empty($keyword)){
            $brands = $brands->where('name','like','%'.$keyword.'%');
        }

        if(!empty($status)){
            $brands = $brands->where('status',$status);
        }

        if(!empty($limit)){
            $brands = $brands->paginate($limit);
        }else{
            $brands = $brands->paginate(10);
        }

        return $brands;
    }
}