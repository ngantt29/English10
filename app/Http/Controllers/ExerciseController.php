<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\Question;

class ExerciseController extends Controller
{
    //
    function getExercise($id){
        $exercise = Exercise::find($id);
        $questions = Question::where("id_exercise",$id)->get();

    	return view('pages.exercise',['exercise'=>$exercise, 'questions'=>$questions]);
    }
}
