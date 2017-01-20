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
<form action="{{url('/change-password')}}" method="POST"  class="form-change-password">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <h2>Change password</h2>
    <input type="password" class="form-control" name="password" placeholder="Password"/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
</form>
@stop