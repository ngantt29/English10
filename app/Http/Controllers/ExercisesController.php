<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
class ExercisesController extends Controller
{
    //
    function getExercises(){
        $exercise = Exercise::all();
    	return view('pages.exercises',['exercise'=>$exercise]);
    }
}
