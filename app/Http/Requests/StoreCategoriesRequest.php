<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriesRequest extends FormRequest
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
            'name'          => 'required|string|max:255',
            'description'   => 'required|string|max:1000',
            'status'        => 'required|in:active,inactive',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'          => 'Tên danh mục không được bỏ trống.',
            'name.string'            => 'Tên danh mục phải là một chuỗi văn bản.',
            'name.max'               => 'Tên danh mục không được vượt quá 255 ký tự.',
            'description.required'   => 'Mô tả danh mục không được bỏ trống.',
            'description.string'     => 'Mô tả danh mục phải là một chuỗi văn bản.',
            'description.max'        => 'Mô tả danh mục không được vượt quá 1000 ký tự.',
            'status.required'        => 'Trạng thái danh mục không được bỏ trống.',
            'status.in'              => 'Trạng thái danh mục phải là "active" hoặc "inactive".',
        ];
    }
}
