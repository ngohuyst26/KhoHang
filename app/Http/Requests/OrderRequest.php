<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'total_payment'  => 'required|integer',
            'discount'       => 'required',
            'payment_method' => 'required',
            'order_items'    =>  'required',
        ];
    }

    public function messages(): array
    {
        return [
            'required'  => 'Vui lòng nhập dữ liệu!',
            'integer'   => 'Dữ liệu phải là số!',
        ];
    }

    protected function failedValidation(Validator $validator):void{
        throw new HttpResponseException(
            response()->json([
            'status'  => false,
            'message' => "Lỗi",
            'data'    => $validator->errors()
        ],
            Response::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
