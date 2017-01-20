<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        if (\Auth::check()) {
            if (\Auth::user()->role == 1) {
                $users = \App\User::paginate(10);
            } else {
                return redirect('login');
            }
            return view('user.list_user', ['users' => $users]);
        } else {
            return redirect('login');
        }
    }
}
