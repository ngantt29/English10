<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ScoreExercise;
use App\ScoreExam;

class ProfileController extends Controller
{
    //
    function getProfile(){
        $user = Auth::user();
        $scoresExercise = ScoreExercise::where('id_user',$user->id)->get();
        $scoresExam = ScoreExam::where('id_user',$user->id)->get();
        return view('pages.myprofile', ['user'=>$user, 'scoresExercise'=>$scoresExercise, 'scoresExam'=>$scoresExam]);
    }

    function postProfile(Request $request){
        $this->validate($request,[
            ''
        ]);
        $user = User::find(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('thay-doi-thong-tin')->with("Information","Cập nhật thành công");
    }

    function getEditProfile(){
        return view('pages.edit-profile');
    }

    function postEditProfile(Request $request){
        $this->validate($request,[
            ''
        ]);
        $user = User::find(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('trang-ca-nhan')->with("Information","Cập nhật thành công");
    }
}
