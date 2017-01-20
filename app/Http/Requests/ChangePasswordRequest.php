<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'password.required'=>'Enter password!'
        ];
    }
}
