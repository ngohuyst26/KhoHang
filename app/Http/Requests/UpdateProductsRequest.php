<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateProductsRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'inventory' => 'required|numeric',
            'category_id' => 'exists:App\Models\Category,id',
            'supplier_id' => 'exists:App\Models\Supplier,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Dữ liệu không được trống!',
            'max' => 'Dữ liệu phải nhỏ hơn 255 ký tự',
            'numeric' => 'Dữ liệu phải là số'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json(
            [
                'errors' => [
                    'other' => $errors,
                ],
                'status_code' => 422,
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
