<?php

namespace App\Repositories\Department;

use App\Models\Department;
use App\Repositories\BaseRepository;
use App\Repositories\Department\DepartmentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DepartmentRepository extends BaseRepository implements DepartmentRepositoryInterface{
    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Department $model){
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
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
        return $this->model->find($id)->update($data);
    }

    public function find(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id): bool|Model
    {
        $departments = $this->model->find($id);
        if (!$departments) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $departments->delete();
    }
}