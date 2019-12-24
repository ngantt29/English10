<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreExerciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_exercise', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('score');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('user', 255);
            $table->unsignedBigInteger('id_exercise');
            $table->foreign('id_exercise')->references('id')->on('exercise');
            $table->string('exercise', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_exercise');
    }
}
