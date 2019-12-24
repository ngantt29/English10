<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $table = 'exercise';

    public function lesson(){
    	return $this->belongsTo('App\Lesson','id_lesson','id');
    }

    public function questionExercise(){
        return $this->hasMany('App\QuestionExercise','id_exercise');
    }

    public function scoreExercise(){
        return $this->hasMany('App\ScoreExercise','id_exercise');
    }

    public function comment(){
        return $this->hasMany('App\Comment','id_exercise');
    }

}
