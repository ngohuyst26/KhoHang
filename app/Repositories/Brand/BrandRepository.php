<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface{
    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Brand $model){
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {
        $brands = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $brands = $brands->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status') && $request->status != '' ){
            $brands = $brands->where('status','=',$request->status);
        }

        if($request->has('limit')){
            $brands = $brands->paginate($request->limit);
        }else{
            $brands = $brands->paginate(10);
        }

        return $brands;
    }

    public function latest($perPage = 0): Model
    {
        return $this->model->orderBy('id', 'DESC')
                           ->when($perPage !== 0, function ($query) use ($perPage) {
                               return $query->paginate($perPage);
                           })
                           ->get();
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
        $brands = $this->model->find($id);
        if (!$brands) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $brands->delete();
    }
}