<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'TinTuc';
    public  function LoaiTinTuc(){
    	return $this->belongsTo('App\LoaiTinTuc','id_loaitin','id_loaitin');
    }
}
