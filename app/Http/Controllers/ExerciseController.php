<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\QuestionExercise;
use App\Lesson;
use App\ScoreExercise;
use Illuminate\Support\Facades\Auth;


class ExerciseController extends Controller
{
    //
    function getExercise($id_unit, $id_exercise){
        $exercise = Exercise::find($id_exercise);
        $questions = $exercise->questionExercise;
        $lesson = $exercise->lesson;
    	return view('pages.exercise',['exercise'=>$exercise, 'questions'=>$questions,'lesson'=>$lesson]);
    }

    function postExercise(Request $request, $id_unit, $id_exercise){
        $score = 0;
        $questions = QuestionExercise::where("id_exercise",$id_exercise)->get();
        
        $total = count($questions);
        for($i = 0; $i < $total; $i++){
            // echo $i." ".$request->$i." ".$questions[$i]->correctAnswer."<br>";
            if((int) $request->$i == $questions[$i]->correctAnswer){
                $score++;
            }
        }
        $score = ($score * 10)/$total;
        $user = Auth::user();
        $scoreExercise = ScoreExercise::where('id_user',$user->id)->where("id_exercise", $id_exercise)->first();
        if($scoreExercise){
            $scoreExercise->score = $score;
            $scoreExercise->save();
            return redirect()->route('ket-qua-luyen-tap',['id_unit'=>$id_unit,'id_exercise'=>$id_exercise, 'score'=>$score]);
        } else {
            $scoreExercise = new ScoreExercise;
            $scoreExercise->score = $score;
            $scoreExercise->id_user = $user->id;
            $scoreExercise->id_exercise = $id_exercise;
            $scoreExercise->save();
            return redirect()->route('ket-qua-luyen-tap',['id_unit'=>$id_unit,'id_exercise'=>$id_exercise, 'score'=>$score]);
        }
        
    }

    function getResult($id_unit, $id_exercise, $score){
        $exercise = Exercise::find($id_exercise);
        $lesson = $exercise->lesson;
        return view('pages.result-exercise',['exercise'=>$exercise, 'lesson'=>$lesson,'score'=>$score]);
    }
}
