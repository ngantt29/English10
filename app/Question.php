<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'question';
    
    public function exercise(){
    	return $this->belongsTo('App\Exercise','id_exercise','id');
    }
    
    public function exam(){
    	return $this->belongsTo('App\Exam','id_exam','id');
    }
}
