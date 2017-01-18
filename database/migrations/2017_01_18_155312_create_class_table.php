<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{

    public function up()
    {
        Schema::create('Class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_code');
            $table->string('id_trainer');
            $table->text('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Class');
    }
}
