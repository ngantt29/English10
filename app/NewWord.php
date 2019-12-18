<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewWord extends Model
{
    //
    protected $table = 'new_word';

    public function lesson(){
    	return $this->belongsTo('App\Lesson','id_lesson','id');
    }
}
