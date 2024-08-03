<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreProductsRequest extends FormRequest
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
            'price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'inventory' => 'nullable|numeric',
            'generated.*.price' => 'sometimes|required|numeric',
            'generated.*.sale_price' => 'sometimes|required|numeric',
            'generated.*.stock' => 'sometimes|required|numeric',
            'category_id' => 'exists:App\Models\Category,id',
            'supplier_id' => 'exists:App\Models\Supplier,id'
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->sometimes(['price', 'sale_price', 'inventory'], 'required', function ($input) {
            return !isset($input->generated);
        });
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
        $price = $errors->get('generated.*.price');
        $salePrice = $errors->get('generated.*.sale_price');
        $stock = $errors->get('generated.*.stock');
        $otherErrors = [];
        foreach ($errors->toArray() as $key => $messages) {
            if (strpos($key, 'generated.') !== 0) {
                $otherErrors[$key] = $messages;
            }
        }
        $stockErrors = [];
        foreach ($stock as $key => $messages) {
            $changeKey = str_replace('.', '_', $key);
            $stockErrors[$changeKey] = $messages;
        }
        $priceErrors = [];
        foreach ($price as $key => $messages) {
            $changeKey = str_replace('.', '_', $key);
            $priceErrors[$changeKey] = $messages;
        }
        $salePriceErrors = [];
        foreach ($salePrice as $key => $messages) {
            $changeKey = str_replace('.', '_', $key);
            $salePriceErrors[$changeKey] = $messages;
        }
        throw new HttpResponseException(response()->json(
            [
                'errors' => [
                    'price' => $priceErrors,
                    'sale_price' => $salePriceErrors,
                    'stock' => $stockErrors,
                    'other' => $otherErrors,
                ],
                'status_code' => 422,
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
