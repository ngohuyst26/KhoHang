<?php

namespace App\Repositories\Supplier;

use App\Models\Supplier;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SupplierRepository extends BaseRepository implements SupplierRepositoryInterface{
    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Supplier $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {

        $suppliers = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $suppliers = $suppliers->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status') && $request->status != '' ){
            $suppliers = $suppliers->where('status',$request->status);
        }

        if($request->has('limit')){
            $suppliers = $suppliers->paginate($request->limit);
        }else{
            $suppliers = $suppliers->paginate(10);
        }

        return $suppliers;
    }

    public function create(array $data)
    {
        $this->validate($data, $this->rules, $this->messages);
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool|Model
    {
        $this->validate($data, $this->rules, $this->messages);
        return $this->model->findOrFail($id)->update($data);
    }

    public function find(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id): bool|Model
    {
        $customer = $this->model->find($id);
        if (!$customer) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $customer->delete();
    }
}