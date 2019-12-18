<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
    protected $table = 'exam';
    
    public function scoreExam(){
        return $this->hasMany('App\ScoreExam','id');
    }

    public function question(){
        return $this->hasMany('App\Question','id');
    }
}
