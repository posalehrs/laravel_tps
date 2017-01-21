
@extends('layout')

@section('content')
    <h2>Course list</h2>
    {{ $courses->links() }}<br>
    @if(Auth::user()->role==1)
    <button type="button" class="btn btn-info" onclick="location.href='/update-course'">Add new</button><br><br>
    @endif
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
            <th></th>
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
                @if(Auth::user()->role==0)
                    <td><button type="button" class="btn btn-success" onclick="location.href='/course?course_id={{$course->id}}'">Detail</button></td>
                @else
                    <td><button type="button" class="btn btn-success" onclick="location.href='/update-course?course_id={{$course->id}}'">Edit</button></td>
                @endif
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $courses->links() }}

@stop