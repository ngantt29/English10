<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;
use App\Lesson;

class LessonController extends Controller
{
    //
    public function getListLesson(){
        $lesson= Lesson::all();
        return view('admin.lesson.list',['lesson'=>$lesson]);
    }

    public function getAddLesson(){
        $unit = Unit::all();
        return view('admin.lesson.add',['unit'=>$unit]);
    }
    public function postAddLesson(Request $request){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'id_unit'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'id_unit.required'=>'Bạn chưa chọn unit'
            ]
        );
        $unit = Unit::select('id', 'title')->where("id", $request->id_unit)->get();
        $lesson = new Lesson;
        $lesson->title = $request->title;
        $lesson->desc = $request->desc;
        $lesson->id_unit = $request->id_unit;
        $lesson->unit = $unit[0]->title;
        $extensionImg = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extensionImg as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Lesson/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $lesson->avatar = $name2;
        }
        else{
            $lesson->avatar = "";
        }   
        $extensionVideo = ['mp4','m4p','avm','svi'];
        if($request->hasFile('video')){
            $file = $request->file('video');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extensionVideo as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Lesson/add')->with('Warning','Just except .mp4, .m4p, .avm, .svi');
                    
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/videos/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/videos",$name2);
            $lesson->video = $name2;
        }
        else{
            $lesson->avatar = "";
        }   
        $lesson->save();
        return redirect('admin/Lesson/add')->with('Information','Thêm thành công');
    }
    public function getEditLesson($id){
        $lesson= Lesson::find($id);
        $unit = Unit::all();
        return view('admin.lesson.edit',['lesson'=>$lesson,'unit'=>$unit]);
    }

    public function postEditLesson(Request $request, $id){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'id_unit'=>'required',
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề',
                'title.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'id_unit.required'=>'Bạn phải chọn unit',
            ]  
        );
        $lesson=Lesson::find($id);
        $unit = Unit::select('id', 'title')->where("id", $request->id_unit)->get();
        $lesson->title = $request->title;
        $lesson->desc = $request->desc;
        $lesson->id_unit = $request->id_unit;        
        $lesson->unit = $unit[0]->title;
        $extension = ['jpg','png','jpeg','end'];
        if($rq->hasFile('avatar')){
            $file = $rq->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Lesson/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $lesson->avatar = $name2;
        }
        $extensionVideo = ['mp4','m4p','avm','svi'];
        if($request->hasFile('video')){
            $file = $request->file('video');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extensionVideo as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Lesson/add')->with('Warning','Just except .mp4, .m4p, .avm, .svi');
                    
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/videos/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/videos",$name2);
            $lesson->video = $name2;
        }
        $lesson->save();
        return redirect('admin/Lesson/edit/'.$id)->with('Information','Sửa thành công');

        

    }    
    public function getDeleteLesson($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();

        return redirect('admin/Lesson/list') ->with('Information','Bạn đã xóa thành công');

    }
}
