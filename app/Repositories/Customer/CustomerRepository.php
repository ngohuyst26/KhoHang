<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface{

    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(Customer $model)
    {
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