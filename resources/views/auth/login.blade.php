@extends('layout')

@section('content')
<form action="{{url('/login')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="user_code" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnLogin" value="Login" /></td>
        </tr>
    </table>
</form>
@stop