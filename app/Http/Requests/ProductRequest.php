<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'avatar' => 'required',
            'promotion' =>'required',
            'status' => 'required',
            'category_id' => 'required',
            'size_id' => 'required',
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống tên sản phẩm !',
            'quantity.required' => 'Chưa điền số lượng !',
            'price.required' => 'Nhập số tiền !',
            'size_id.required' => 'Chọn size !',
            'status.required' => 'Chưa chọn trạng thái !',
            'category_id.required' => 'Chưa chọn damh mục !',
            'description.required' => 'Điền mô tả !',
            'avatar.required' => 'Chọn ảnh đại diện !'
        ];
    }
}
