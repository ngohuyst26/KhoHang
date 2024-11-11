<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserRepository extends BaseRepository implements UserRepositoryInterface{

    protected $rules = [
        'name' => 'required|max:255',
    ];

    protected $messages = [
        'required' => 'Dữ liệu không được trống!',
        'max' => 'Dữ liệu tối đa :max kí tự'
    ];

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function filter($request)
    {
        $users = $this->model->orderBy('id', 'DESC');

        if($request->has('keyword')){
            $users = $users->where('name','like','%'.$request->keyword.'%');
        }

        if($request->has('status')  && $request->status != '' ){
            $users = $users->where('status',$request->status);
        }

        if($request->has('limit')){
            $users = $users->paginate($request->limit);
        }else{
            $users = $users->paginate(10);
        }

        return $users;
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
        $rules = [
            'name'          => ['required','max:255'],
            'email'         => ['required', 'string', 'lowercase', 'email', 'max:255','unique:users,email'],
            'password'      => ['required', 'confirmed', Rules\Password::defaults()],
            'phone'         => ['required', 'regex:/^(09|03|05|07|08)+([0-9]{8})\b/','unique:users,phone'],
            'date_of_birth' => ['required', 'date_format:Y/m/d' , 'before:' . date('Y-m-d')],
            'address'       => ['required', 'string','max:255'],
        ];

        $messages = [
            'required'  => "Vui lòng nhập dữ liệu",
            'string'    => "Dữ liệu phải là chữ cái từ a-zA-Z",
            'lowercase' => "Dữ liệu phải là chữ cái thường",
            'email'     => "Không đúng định đạng email",
            'phone.regex'  => "Số điện thoại bắt đầu là 03 05 07 08 09 với độ dài là 10 chữ số",
            'date'         => "Ngày không đúng định dạng",
            'max'          => "Dữ liệu tối đa :max kí tự",
            'email.unique' => "Email đã tồn tại trong hệ thống",
            'phone.unique' => "Số điện thoại đã tồn tại trong hệ thống",
            'confirmed'    => "Mật khẩu không khớp",
            'password.min' => "Độ dài mật khẩu ít nhất 8 kí tự",
            'date_of_birth.date_format' => "Ngày có dịnh dạng là dd/mm/yyyy",
            'date_of_birth.before'      => "Ngày phải trước hiện tại",
        ];
        $this->validate($data, $rules, $messages);
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool|Model
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($id)],
        ];

        $messages = [
            'required' => 'Dữ liệu không được trống!',
            'max' => 'Dữ liệu tối đa :max kí tự',
            'email.unique' => "Email đã tồn tại trong hệ thống"
        ];

        $this->validate($data, $rules, $messages);
        return $this->model->findOrFail($id)->update($data);
    }

    public function find(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id): bool|Model
    {
        $users = $this->model->find($id);
        if (!$users) {
            return throw new ModelNotFoundException('Record not found!');
        }
        return  $users->delete();
    }

}