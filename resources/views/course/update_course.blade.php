
@extends('layout')

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <strong>Error!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Course Detail</h2>
    <form action="{{url('/update-course')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$course->id or ''}}">
        <table class="table table-bordered">
            <tr>
                <th width="200">Course code</th>
                <td><input class="input-edit" value="{{$course->course_code or ''}}" name="course_code"/></td>
            </tr>
            <tr>
                <th>Course name</th>
                <td><input class="input-edit" value="{{$course->course_name or ''}}" name="course_name"/></td>
            </tr>
            <tr>
                <th>Course description</th>
                <td><textarea class="input-edit" name="description">{{$course->description or ''}}</textarea></td>
            </tr>
            <tr>
                <th>Room</th>
                <td><input class="input-edit" value="{{$course->description or ''}}" name="location"/></td>
            </tr>
            <tr>
                <th>Quantity of students</th>
                <td><input class="input-edit" value="{{$course->quantity or ''}}" name="quantity"/></td>
            </tr>
            <tr>
                <th>Start date</th>
                <td><input value="{{$course->start_date or ''}}" name="start_date"/></td>
            </tr>
            <tr>
                <th>End date</th>
                <td><input value="{{$course->end_date or ''}}" name="end_date"/></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@stop