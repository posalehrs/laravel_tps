<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'course_code'=>'required',
            'course_name'=>'required',
            'description'=>'required',
            'quantity'=>'required|numeric',
            'start_date'=>'required|date',
            'end_date'=>'required|date'
        ];
    }
    public function messages()
    {
        return [
            'course_code.required'=>'Enter course code',
            'course_name.required'=>'Enter course name',
            'description.required'=>'Enter description',
            'quantity.required'=>'Enter quantity',
            'quantity.numeric'=>'Enter number of quantity',
            'start_date.required'=>'Enter start_date',
            'start_date.date'=>'Enter invalid date',
            'end_date.required'=>'Enter end_date',
            'end_date.date'=>'Enter invalid date'
        ];
    }

}
