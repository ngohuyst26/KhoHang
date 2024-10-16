<?php

namespace App\Repositories\Staff;

use App\Models\Staff;
use App\Repositories\BaseRepository;
use App\Repositories\Staff\StaffRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StaffRepository extends BaseRepository implements StaffRepositoryInterface{
    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Staff $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {
        $staffs = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $staffs = $staffs->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status') && $request->status != '' ){
            $staffs = $staffs->where('status',$request->status);
        }

        if($request->has('limit')){
            $staffs = $staffs->paginate($request->limit);
        }else{
            $staffs = $staffs->paginate(10);
        }

        return $staffs;
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
        $staffs = $this->model->find($id);
        if (!$staffs) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $staffs->delete();
    }
}