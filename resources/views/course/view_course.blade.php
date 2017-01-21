
@extends('layout')

@section('content')
    <h2>Course Detail</h2>
    <table class="table table-bordered">
        <tr>
            <th>Course code</th>
            <td>{{$course->course_code}}</td>
        </tr>
        <tr>
            <th>Course name</th>
            <td>{{$course->course_name}}</td>
        </tr>
        <tr>
            <th>Course description</th>
            <td>{{$course->description}}</td>
        </tr>
        <tr>
            <th>Room</th>
            <td>{{$course->location}}</td>
        </tr>
        <tr>
            <th>Quantity of students</th>
            <td>{{$course->quantity}}</td>
        </tr>
        <tr>
            <th>Start date</th>
            <td>{{$course->start_date}}</td>
        </tr>
        <tr>
            <th>End date</th>
            <td>{{$course->end_date}}</td>
        </tr>
    </table>

    <button type="button" class="btn btn-default" onclick="location.href='/list-course'">Back</button>

@stop