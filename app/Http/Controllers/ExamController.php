<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamController extends Controller
{
    //
    function getExam($id_exam){
        $exam = Exam::find($id_exam);
        $questions = $exam->questionExam;
    	return view('pages.exam',['exam'=>$exam, 'questions'=>$questions]);
    }

    function postExam(Request $request, $id_exam){
        $score = 0;
        $questions = QuestionExam::where("id_exam",$id_exam)->get();
        $total = count($questions);
        for($i = 0; $i < $total; $i++){
            // echo $i." ".$request->$i." ".$questions[$i]->correctAnswer."<br>";
            if((int) $request->$i == $questions[$i]->correctAnswer){
                $score++;
            }
        }
        $score = ($score * 10)/$total;
        $user = Auth::user();
        $scoreExam = ScoreExam::where('id_user',$user->id)->where("id_exam", $id_exam)->first();
        if($scoreExam){
            $scoreExam->score = $score;
            $scoreExam->save();
            return redirect()->route('ket-qua-luyen-tap',['id_exam'=>$id_exam, 'score'=>$score]);
        } else {
            $scoreExam = new ScoreExam;
            $scoreExam->score = $score;
            $scoreExam->id_user = $user->id;
            $scoreExam->id_exam = $id_exam;
            $scoreExam->save();
            return redirect()->route('ket-qua-luyen-tap',['id_exam'=>$id_exam, 'score'=>$score]);
        }
        
    }

    function getResult($id_exam, $score){
        $exam = Exam::find($id_exam);
        return view('pages.result-exam',['exam'=>$exam, 'score'=>$score]);
    }
}
