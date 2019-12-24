<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table = 'unit';

    public function lesson(){
        return $this->hasMany('App\Lesson','id_unit');
    }
}
