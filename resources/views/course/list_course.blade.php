@if(Auth::check())
    {{Auth::user()}}
@endif

@extends('layout')

@section('content')

@foreach ($courses as $course)
    <p>{{ $course->course_code }}</p>
@endforeach

@stop