<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    //
    function getLesson($id){
        $lesson = Lesson::find($id);
    	return view('pages.lesson',['lesson'=>$lesson]);
    }
}
