<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        if (\Auth::check()) {
            if (\Auth::user()->role == 1) {
                $courses = \App\Course::paginate(10);
            } else {
                $courses = \App\Course::where('id_user', '=', \Auth::user()->id)
                    ->orderBy('start_date', 'asc')
                    ->paginate(10);
            }
            return view('course.list_course', ['courses' => $courses]);
        } else {
            return redirect('login');
        }
    }
}
