<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Unit;
use App\Lesson;
use App\Exercise;
use App\ScoreExercise;

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
        $user = Auth::user();
        $lessons = $unit->lesson;
        foreach($lessons as $lesson){
            $exercise = Exercise::where('id_lesson', $lesson->id)->first();
            if($user){
                $score = ScoreExercise::where('id_exercise',$exercise->id)->where('id_user',$user->id)->first();
                if($score)
                    $lesson->score = $score->score;
            }
            $lesson->id_exercise = $exercise->id;
        }
    	return view('pages.unit',['unit'=>$unit, 'lessons'=>$lessons]);
    }
}
