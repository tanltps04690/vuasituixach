<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkAddBom extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'avatar'=>'required|file',
            'name'=>'required|min:10|max:255',
            'phone'=>'required|min:10|max:12',
            'address'=>'required'
        
    ];
    }
    public function messages()
    {
        return [
            
            'required'=>':attribute Không được để trống',
            'min'=>':attribute Không được nhỏ hơn :min',
            'max'=>':attribute Không được lớn hơn :max',
            'confirmed'=>'Nhập lại mật khẩu không hợp lệ',
        ];
    }
}
