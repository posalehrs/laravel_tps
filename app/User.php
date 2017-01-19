<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_code','name', 'email', 'password','role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
