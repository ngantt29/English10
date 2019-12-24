<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamsController extends Controller
{
    //
    function getExams(){
        $exam = Exam::paginate(8);
    	return view('pages.exams',['exams'=>$exam]);
    }
}
