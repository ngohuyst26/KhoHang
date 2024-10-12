<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportGoodsRequest extends FormRequest{

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
            'supplier_id'                       => 'required|numeric',
            'code'                              => 'max:255',
            'total_goods'                       => 'required|numeric',
            'discount'                          => 'required|numeric',
            'supplier_payments'                 => 'required|numeric',
            'detail_import_goods.*.product_id'  => 'required|numeric',
            'detail_import_goods.*.qty'         => 'required|numeric',
            'detail_import_goods.*.price'       => 'required|numeric',
            'detail_import_goods.*.discount'    => 'required|numeric',
            'detail_import_goods.*.total_price' => 'required|numeric',
        ];
    }


    public function messages(){
        return [
            'required' => 'Dữ liệu không được trống!',
            'max'      => 'Dữ liệu phải nhỏ hơn 255 ký tự',
            'numeric'  => 'Dữ liệu phải là số',
        ];
    }
}
