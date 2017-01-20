<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ChangePasswordController extends Controller
{
    use ResetsPasswords;

    public function getChangePassword(){
        return view('auth.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $request){
        $user = \App\User::find(\Auth::user()->id);
        $user->password = \Hash::make($request->password);
        $user->save();
        return redirect('list-course');
    }
}
