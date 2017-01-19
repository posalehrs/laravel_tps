<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code', 'id_user', 'description', 'start_date', 'end_date'
    ];
}
