<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên !',
            'email.required' => 'Vui lòng nhập email !',
            'email.email' => 'Không đúng định dạng email !',
            'phone.required' => 'Vui lòng nhập số điện thoại !',
            'content.required' => 'Vui lòng điền nội dung !',
        ];
    }
}
