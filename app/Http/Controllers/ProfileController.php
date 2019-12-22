<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    //
    function getProfile(){
        return view('pages.myprofile');
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
        return redirect('trang-ca-nhan')->with("Information","Cập nhật thành công");
    }
}
