<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreExercise extends Model
{
    //
    protected $table = 'score_exercise';

    public function exercise(){
    	return $this->belongsTo('App\Exercise','id_exercise','id');
    }

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }
}
