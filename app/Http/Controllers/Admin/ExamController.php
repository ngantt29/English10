<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;

class ExamController extends Controller
{
    //
    public function getListExam(){
        $exam= Exam::all();
        return view('admin.Exam.list',['exam'=>$exam]);
    }

    public function getAddExam(){
        return view('admin.Exam.add');
    }
    public function postAddExam(Request $request){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
            ]
        );
        $exam = new Exam;
        $exam->title = $request->title;
        $exam->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Exam/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/images/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/images",$name2);
            $exam->avatar = $name2;
        }
        else{
            $exam->avatar = "";
        }   
        $exam->save();
        return redirect('admin/Exam/add')->with('Information','Success');
    }
    public function getEditExam($id){
        $exam= Exam::find($id);
        return view('admin.Exam.edit',['exam'=>$exam]);
    }

    public function postEditExam(Request $request, $id){
        $exam=Exam::find($id);
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
            ]  
        );
        $exam->title = $request->title;
        $exam->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Exam/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/images/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/images",$name2);
            $exam->avatar = $name2;
        }
        else{
            $exam->avatar = "";
        }   
        $exam->save();
        return redirect('admin/Exam/edit/'.$id)->with('Information','Success');

        

    }    
    public function getDeleteExam($id)
    {
        $exam = Exam::find($id);
        $exam->delete();

        return redirect('admin/Exam/list') ->with('Information','Success');

    }
}
