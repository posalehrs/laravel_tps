<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_code');
            $table->integer('id_user');
            $table->text('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Courses');
    }
}
