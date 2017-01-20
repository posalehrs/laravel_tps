
@extends('layout')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>User code</th>
            <th>User name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->user_code}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

@stop