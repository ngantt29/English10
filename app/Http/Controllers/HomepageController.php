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
        $unit = Unit::all();
        $exercise = Exercise::all();
        $exam = Exam::all();
        
    	return view('pages.index',['units'=>$unit, 'exercises'=>$exercise,'exams'=>$exam]);
    }
}
