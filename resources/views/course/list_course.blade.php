
@extends('layout')

@section('content')
    {{ $courses->links() }}
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>C.code</th>
            <th>Course name</th>
            <th>Description</th>
            <th>Room</th>
            <th>Quantity</th>
            <th>Start date</th>
            <th>End date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{$course->course_code}}</td>
                <td>{{$course->course_name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->location}}</td>
                <td>{{$course->quantity}}</td>
                <td>{{$course->start_date}}</td>
                <td>{{$course->end_date}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $courses->links() }}

@stop