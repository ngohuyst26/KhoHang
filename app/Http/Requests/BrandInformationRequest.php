<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class BrandInformationRequest extends FormRequest{

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
            'logo'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // File logo
            'name_brand'    => 'required|string|max:255',
            'phone'         => 'required|string|max:10',
            'email'         => 'required|email',
            'facebook_link' => 'nullable|url',
            'youtube_link'  => 'nullable|url',
            'tiktok_link'   => 'nullable|url',
        ];
    }

    public function messages(){
        return [
            'required' => 'Dữ liệu không được trống!',
            'max'      => 'Dữ liệu phải nhỏ hơn 255 ký tự!',
            'numeric'  => 'Dữ liệu phải là số!',
            'email'    => 'Email chưa đúng định dạng!',
            'mimes'    => 'Hình ảnh chưa đúng định dạng!',
            'url'      => 'Dữ liệu phải là một đường dẫn!'
        ];
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json(
            $validator->errors(),
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}