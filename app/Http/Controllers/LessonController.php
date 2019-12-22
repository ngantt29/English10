<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Exercise;

class LessonController extends Controller
{
    //
    function getLesson($id){
        $lesson = Lesson::find($id);
        $exercise = Exercise::where("id_lesson", $id)->first();
    	return view('pages.lesson',['lesson'=>$lesson,'exercise'=>$exercise]);
    }
}
