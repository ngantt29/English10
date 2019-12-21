<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamController extends Controller
{
    //
    function getExam($id){
        $exam = Exam::find($id);
    	return view('pages.exam',['exam'=>$exam]);
    }
}
