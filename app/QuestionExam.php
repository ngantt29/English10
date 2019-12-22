<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionExam extends Model
{
    //
    protected $table = 'question_exam';

    public function exam(){
    	return $this->belongsTo('App\Exam','id_exam','id');
    }
}
