<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question', 255);
            $table->string('ans1', 255);
            $table->string('ans2', 255);
            $table->string('ans3', 255);
            $table->string('ans4', 255);
            $table->integer('correctAnswer');
            $table->unsignedBigInteger('id_exercise');
            $table->foreign('id_exercise')->references('id')->on('exercise');
            $table->unsignedBigInteger('id_exam');
            $table->foreign('id_exam')->references('id')->on('exam');
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
        Schema::dropIfExists('question');
    }
}
