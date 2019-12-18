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

    public function question(){
        return $this->hasMany('App\Question','id');
    }

    public function scoreExercise(){
        return $this->hasMany('App\ScoreExercise','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','id');
    }

}
