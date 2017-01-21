<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCourseRequest;
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

    public function getCourse(Request $request){
        if (\Auth::check()) {
            if($request->course_id) {
                $course = \App\Course::find($request->course_id);
                if (\Auth::user()->role == 1) {
                    return view('course.update_course', ['course' => $course]);
                } else {
                    return view('course.view_course', ['course' => $course]);
                }
            }else{
                return view('course.update_course');
            }
        }else {
            return redirect('login');
        }
    }

    public function postCourse(UpdateCourseRequest $request){
        if (\Auth::check()) {
            if($request->id) {
                $course = \App\Course::find($request->id);
            }else{
                $course=new \App\Course;
                $course->id_user=\Auth::user()->id;
            }
            $course->course_code=$request->course_code;
            $course->course_name=$request->course_name;
            $course->description=$request->description;
            $course->location=$request->location;
            $course->quantity=$request->quantity;
            $course->start_date=$request->start_date;
            $course->end_date=$request->end_date;
            $course->save();
            return redirect('list-course');
        }else {
            return redirect('login');
        }
    }
}
