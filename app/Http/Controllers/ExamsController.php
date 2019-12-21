<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamsController extends Controller
{
    //
    function getExams(){
        $exam = Exam::all();
    	return view('pages.exams',['exams'=>$exam]);
    }
}
