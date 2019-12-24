<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exercise;
use App\Lesson;

class ExerciseController extends Controller
{
    //
    public function getListExercise(){
        $exercise= Exercise::all();
        return view('admin.Exercise.list',['exercise'=>$exercise]);
    }

    public function getAddExercise(){
        $lesson = Lesson::all();
        return view('admin.Exercise.add',['lesson'=>$lesson]);
    }
    public function postAddExercise(Request $request){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'id_lesson'=>'required|unique:exercise,id_lesson',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'id_lesson.required'=>'Bạn chưa chọn lesson'
            ]
        );
        $exercise = new Exercise;
        $exercise->title = $request->title;
        $exercise->desc = $request->desc;
        $exercise->id_lesson = $request->id_lesson;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Exercise/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $exercise->avatar = $name2;
        }
        else{
            $exercise->avatar = "";
        }   
        $exercise->save();
        return redirect('admin/Exercise/add')->with('Information','Success');
    }
    public function getEditExercise($id){
        $exercise= Exercise::find($id);
        $lesson = Lesson::all();
        return view('admin.Exercise.edit',['exercise'=>$exercise, 'lesson'=>$lesson]);
    }

    public function postEditExercise(Request $request, $id){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'id_lesson'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'id_lesson.required'=>'Bạn phải chọn lesson',
            ]  
        );
        $exercise=Exercise::find($id);
        $exercise->desc = $request->desc;
        $exercise->id_lesson = $request->id_lesson;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Exercise/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $exercise->avatar = $name2;
            echo $name2;
        }
        else{
            $exercise->avatar = "";
        }   
        $exercise->save();
        return redirect('admin/Exercise/edit/'.$id)->with('Information','Success');
    }    
    public function getDeleteExercise($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return redirect('admin/Exercise/list') ->with('Information','Success');

    }
}
