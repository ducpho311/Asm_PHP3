<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|min:6|max:32',
            'password' => 'required|min:6',
            
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Không được bỏ trống email !',
            'email.email' => 'Không đúng định dạng email !',
            'email.min' => 'Email tối thiểu 6 kí tự !',
            'email.max' => 'Email tối đa 32 kí tự !',
            'password.required' => 'Điền mật khẩu !',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự !',
        ];
    }
}
