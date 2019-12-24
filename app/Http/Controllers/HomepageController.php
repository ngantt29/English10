<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Exercise;
use App\Exam;

class HomepageController extends Controller
{
    //
    function getHomePage(){
        $unit = Unit::oldest()->skip(0)->take(4)->get();
        $exercise = Exercise::skip(0)->take(4)->get();
        $exam = Exam::skip(0)->take(4)->get();
        
    	return view('pages.index',['units'=>$unit, 'exercises'=>$exercise,'exams'=>$exam]);
    }
}
