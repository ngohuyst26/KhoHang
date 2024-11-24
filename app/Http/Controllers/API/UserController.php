<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->filter($request);
        return response()->json([
            'status'  => true,
            'message' => "Danh sách khách hàng",
            'data'    => $users
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $users = $this->userRepository->create($request->all());
            $users->assignRole('customer');
            return response()->json([
                'status'  => true,
                'message' => "Thêm thành công",
                'data'    => $users
            ],201);
        }
        catch (ValidationException $e){
            return response()->json([
                'status'  => false,
                'message' => "Lỗi",
                'data'    => $e->validator->errors()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = $this->userRepository->find($id);
            return response()->json([
                'status'  => true,
                'message' => "Chi tiết khách hàng",
                'data'    => $user
            ],200);
        }
        catch(ModelNotFoundException  $exception){
            return response()->json([
                'status'  => false,
                'message' => "Chi tiết khách hàng",
                'data'    => "Không tìm thấy khách hàng"
            ],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $check_user_id = auth()->user()->id == $id;
        if(!$check_user_id){
            return response()->json([
               'status' => FALSE,
               'message' => "Không có quyền cập nhật thông tin người dùng này",
            ],Response::HTTP_FORBIDDEN);
        }

        $rules = [
            'name'          => ['required','max:255'],
            'email'         => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'phone'         => ['required','regex:/^(09|03|05|07|08)+([0-9]{8})\b/',Rule::unique('users')->ignore($id)],
            'date_of_birth' => ['date_format:d/m/Y' , 'before:' . date('Y-m-d')],
            'address'       => ['max:255'],
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
            'date_of_birth.date_format' => "Ngày có dịnh dạng là dd/mm/yyyy",
            'date_of_birth.before'      => "Ngày phải trước hiện tại",

        ];

        $validator = Validator::make($request->all(),$rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => "Lỗi",
                'data'    => $validator->errors()
            ],400);
        }

        User::find($id)->update($request->all());
        return response()->json([
            'status' => TRUE,
            'messagse' => "Đã cập nhật thông tin người dùng",
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = $this->userRepository->delete($id);
            return response()->json([
                'status'  => true,
                'message' => "Đã xóa thông tin khách hàng",
                'data'    => []
            ],200);
        }
        catch (ModelNotFoundException $e){
            return response()->json([
                'status'  => false,
                'message' => "Xóa thất bại",
                'data'    => []
            ],404);
        }
    }
}
