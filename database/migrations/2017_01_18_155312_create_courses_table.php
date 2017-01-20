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
            $table->string('course_name');
            $table->integer('id_user');
            $table->text('description');
            $table->text('location');
            $table->integer('quantity');
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
