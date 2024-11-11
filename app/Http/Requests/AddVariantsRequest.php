<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class AddVariantsRequest extends FormRequest{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    : bool{
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    : array{
        return [
            'product_id' => 'required',
            'barcode'    => 'required',
            'data'       => 'required|array',
            'price'      => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'inventory'  => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required' => 'Dữ liệu không được trống!',
            'array'    => 'Dữ liệu phải là một mảng!',
            'numeric'  => 'Dữ liệu phải là số!'
        ];
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json(
            $validator->errors(),
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
