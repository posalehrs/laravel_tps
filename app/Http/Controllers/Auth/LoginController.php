<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $auth = array(
            'user_code' => $request->user_code,
            'password' => $request->password
        );
        if (\Auth::attempt($auth)) {

            return redirect('list-course');
        } else {
            return redirect('login');
        }
    }
}
