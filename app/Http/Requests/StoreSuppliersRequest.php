<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuppliersRequest extends FormRequest
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
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'address'  => 'required|string|max:255',
            'email'    => "required|email|unique:suppliers,email,$this->id,id",
            'tax_code' => 'required|string|max:20',
            'status'   => 'required|boolean',
            'notes'    => 'nullable|string|max:500'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên nhà cung cấp là bắt buộc.',
            'name.string' => 'Tên nhà cung cấp phải là một chuỗi ký tự.',
            'name.max' => 'Tên nhà cung cấp không được vượt quá 255 ký tự.',

            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.string' => 'Số điện thoại phải là một chuỗi ký tự.',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự.',

            'address.required' => 'Địa chỉ là bắt buộc.',
            'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',

            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã tồn tại trong hệ thống.',

            'tax_code.required' => 'Mã số thuế là bắt buộc.',
            'tax_code.string' => 'Mã số thuế phải là một chuỗi ký tự.',
            'tax_code.max' => 'Mã số thuế không được vượt quá 20 ký tự.',

            'status.required' => 'Trạng thái là bắt buộc.',
            'status.boolean' => 'Trạng thái phải là giá trị boolean.',

            'notes.string' => 'Ghi chú phải là một chuỗi ký tự.',
            'notes.max' => 'Ghi chú không được vượt quá 500 ký tự.',
        ];
    }

}
