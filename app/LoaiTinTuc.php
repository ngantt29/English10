<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTinTuc extends Model
{
    protected $table = 'LoaiTinTuc';
    public  function  TinTuc(){
    	return  $this-> hasMany('App\TinTuc','id_loaitin','id_loaitin');
    }
}
