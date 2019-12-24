<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
    protected $table = 'exam';
    
    public function scoreExam(){
        return $this->hasMany('App\ScoreExam','id_exam');
    }

    public function questionExam(){
        return $this->hasMany('App\QuestionExam','id_exam');
    }

    public function comment(){
        return $this->hasMany('App\Comment','id_exam');
    }
}
