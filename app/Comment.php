<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';

    public function lesson(){
    	return $this->belongsTo('App\Lesson','id_lesson','id');
    }

    public function exercise(){
    	return $this->belongsTo('App\Exercise','id_exercise','id');
    }
    
    public function exam(){
    	return $this->belongsTo('App\Exam','id_exam','id');
    }

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }
}
