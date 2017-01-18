<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerTable extends Migration
{

    public function up()
    {
        Schema::create('Trainer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trainer_code');
            $table->string('name');
            $table->string('password');
            $table->string('email');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Trainer');
    }
}
