<?php

namespace App\Repositories\Order;

use App\Models\Orders;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
        $brands = $this->model->orderBy('id', 'DESC')->with('orderItems.product_sku.product','user.orders');

        if(!empty($keyword)){
            $brands = $brands->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            });
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

    public function getOrder(int $id){
        return $this->model->with('orderItems.product_sku.product','orderItems.product_sku.photo')->find($id);
    }

    public function delete(int $id)
    : Model|bool{
        return $this->model->findOrFail($id)->delete();
    }

    public function restore(int $id)
    {
        return $this->model->withTrashed()->findOrFail($id)->restore();
    }

}