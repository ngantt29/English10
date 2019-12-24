<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //

    function getLogin(){
        if(Auth::check()){
            return redirect("");
        }
        return view('auth.login');
    }

    function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:8|max:32',
        ],[
            'email.required'=>"Bạn chưa nhập email",
            'password.required'=>"Bạn chủa nhập mật khẩu",
            'password.min'=>"Mật khẩu quá ngắn, ít nhất 8 ký tự",
            'password.max'=>"Mật khẩu quá dài"
        ]);
        // echo bcrypt($request->password);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            return back()->withInput();
        } else{
            return redirect('dang-nhap')->with('Warning','Tài khoản hoặc mật khẩu không chính xác! Vui lòng thử lại');
        }
    }

    function getSignIn(){
        return view('auth.signIn');
    }

    function postSignIn(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:users,email',
            'password'=>'required|min:8|max:32',
            'rePassword'=>'required',
        ],[
            'email.required'=>"Bạn chưa nhập email",
            'email.unique'=>"Email đã tồn tại",
            'password.required'=>"Bạn chưa nhập mật khẩu",
            'password.min'=>"Mật khẩu quá ngắn, ít nhất 8 ký tự",
            'password.max'=>"Mật khẩu quá dài, nhiều nhất 32 ký tự",
            'rePassword.required'=>"Bạn chưa nhập lại mật khẩu",
        ]);
        if($request->password == $request->re_password){
            return redirect("dang-ky")->with('Warning', "Nhập lại mật khẩu không chính xác");
        }
        $user = new User;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect("dang-nhap")->with('Information', "Đăng ký thành công! Hãy đăng nhập");
    }

    function getChangePassword(){
        return view('auth.repassword');
    }

    function postChangePassword(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:8|max:32',
            'repassword'=>'required',
            'oldpassword'=>'required',
        ],[
            'email.required'=>"Bạn chưa nhập email",
            'oldpassword.required'=>"Bạn chưa nhập mật khẩu cũ",
            'password.required'=>"Bạn chưa nhập mật khẩu",
            'password.min'=>"Mật khẩu quá ngắn, ít nhất 8 ký tự",
            'password.max'=>"Mật khẩu quá dài, nhiều nhất 32 ký tự",
            'repassword.required'=>"Bạn chưa nhập lại mật khẩu",
        ]);
        if($request->password == $request->re_password){
            return back()->with('Warning', "Nhập lại mật khẩu không chính xác");
        }
        $user = Auth::user();
        echo bcrypt($request->oldpassword)."<br>".$user->password;
        // if($user && $user->email == $request->email){
        //     if(bcrypt($request->oldpassword) == $user->password){
        //         if($request->password == $request->repassword){
        //             $user->password = bcrypt($request->password);
        //             $user->save();
        //             return redirect("dang-nhap")->with('Information', "Đổi mật khẩu thành công");
        //         } else{
        //             return back()->with('Warning', "Mật khẩu nhập lại không chính xác");    
        //         }
        //     } else{
        //         return back()->with('Warning', "Mật khẩu không chính xác");    
        //     }
        // } else 
        //     return back()->with('Warning', "Email không chính xác");
    }

    
    // $user = User::where('email', $request->email)->first();
    // if($user){
    //     if(bcrypt($request->oldpassword) == $user->password){
    //         if($request->password == $request->repassword){
    //             $user->password = bcrypt($request->password);
    //             $user->save();
    //             return redirect("dang-nhap")->with('Information', "Đổi mật khẩu thành công");
    //         } else{
    //             return back()->with('Warning', "Mật khẩu nhập lại không chính xác");    
    //         }
    //     } else{
    //         return back()->with('Warning', "Mật khẩu không chính xác");    
    //     }
    // } else 
    //     return back()->with('Warning', "Email chưa được đăng ký");

    function getLogout(){
        Auth::logout();
        return redirect('');
    }

    function postLogout(){

    }

    

    function getAdminLogin(){
        return view('admin.auth.login');
    }

    function postAdminLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32',
        ],[
            'email.required'=>"Please input your email address",
            'password.required'=>"Please input your password",
            'password.min'=>"Your password too short. Require at least 3",
            'password.max'=>"Your password too long. Require max is 32"
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            if($user->role == 1)
                return redirect('admin');
            else
                return redirect('admin/login')->with('Warning','Login failed! You do not have permisson to enter this website');
        } else{
            return redirect('admin/login')->with('Warning','Login failed! Email or password has been wrong');
        }
    }

    function getAdminLogout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
