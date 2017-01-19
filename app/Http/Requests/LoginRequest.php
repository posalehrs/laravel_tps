<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_code'=>'required',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'user_code.required'=>'Nhap ma giang vien',
            'password.required'=>'Nhap mat khau'
        ];
    }
}
