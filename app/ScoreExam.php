<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreExam extends Model
{
    //
    protected $table = 'score_exam';

    public function exam(){
    	return $this->belongsTo('App\Exam','id_exam','id');
    }

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }
}
