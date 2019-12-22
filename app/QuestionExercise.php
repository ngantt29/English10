<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionExercise extends Model
{
    //
    protected $table = 'question_exercise';
    
    public function exercise(){
    	return $this->belongsTo('App\Exercise','id_exercise','id');
    }
    
}
