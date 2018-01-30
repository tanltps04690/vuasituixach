<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRegister extends FormRequest
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
            'name'=>'required|min:10|max:255',
            'email'=>'required|email|unique:users,email,'.$this->get('email'),
            'username'=>'required|min:5|max:50|unique:users,username,'.$this->get('username'),
            'phone'=>'required|min:10|max:12',
            'password'=>'required|min:8|max:16|confirmed',
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
            'email'=>':attribute phải là email',
            'unique'=>':attribute đã tồn tại',
        ];
    }
}
