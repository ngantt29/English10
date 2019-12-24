<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $table = 'lesson';

    public function unit(){
    	return $this->belongsTo('App\Unit','id_unit','id');
    }

    public function exercise(){
        return $this->hasMany('App\Exercise','id_lesson');
    }

    public function newWord(){
        return $this->hasMany('App\NewWord','id_lesson');
    }

    public function comment(){
        return $this->hasMany('App\Comment','id_lesson');
    }

}
