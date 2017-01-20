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
    <form action="{{url('/login')}}" method="POST" class="form-signin">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h>Please login</h>
        <input type="text" class="form-control" name="user_code" placeholder="Email Address"/>
        <input type="password" class="form-control" name="password" placeholder="Password"/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
@stop