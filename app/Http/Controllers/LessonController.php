<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lesson;
use App\Exercise;

class LessonController extends Controller
{
    //
    function getLesson($id){
        $lesson = Lesson::find($id);
        $exercise = $lesson->exercise[0];
        $newWords = $lesson->newWord;
    	return view('pages.lesson',['lesson'=>$lesson,'exercise'=>$exercise,'newWords'=>$newWords]);
    }
}
