<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use App\Unit;
use App\Lesson;
use App\Exercise;

class UnitController extends Controller
{
    //
    function getUnit($id){
        // $url = strtok(url()->full(), "/");
        // $array = array();
        // while ($url !== false){
        //     array_push($array, $url);
        //     $url = strtok("/");
        // }
        // $query = str_replace($slug, "", $array[count($array)-1]);
        // echo $query;
        // echo Str::slug("Tiếng anh");
        $unit = Unit::where('id',$id)->first();
        $lesson = Lesson::where('id_unit',$id)->get();
    	return view('pages.unit',['unit'=>$unit, 'lessons'=>$lesson]);
    }
}
