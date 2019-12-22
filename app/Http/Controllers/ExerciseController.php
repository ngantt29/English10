<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\QuestionExercise;
use App\Lesson;

class ExerciseController extends Controller
{
    //
    function getExercise($id_unit, $id){
        $exercise = Exercise::find($id);
        $questions = QuestionExercise::where("id_exercise",$id)->get();
        $lesson = Lesson::find($exercise->id_lesson);
    	return view('pages.exercise',['exercise'=>$exercise, 'questions'=>$questions,'lesson'=>$lesson]);
    }
}
