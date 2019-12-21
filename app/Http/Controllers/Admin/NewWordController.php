<?php
namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\NewWordImport;
use App\Lesson;
use App\NewWord;

class NewWordController extends Controller
{
    //
    public function getListNewWord(){
        $newWord = NewWord::all();
        return view('admin.new-word.list',['newWord'=>$newWord]);
    }

    public function getAddNewWord(){
        $lesson = Lesson::all();
        return view('admin.new-word.add',['lesson'=>$lesson]);
    }
    public function postAddNewWord(Request $request){
        $this->validate($request,
                [
                    'id_lesson'=>'required',
                ],
                [
                    'id_lesson.required'=>'Bạn chưa chọn lesson'
                ]
            );
        $type = $request->type;
        $lesson = Lesson::select('id', 'title')->where("id",$request->id_lesson)->get();
        if($type == 2){
            $this->validate($request,
                [
                    'name'=>'required|min:3|max:100',
                    'id_lesson'=>'required',
                ],
                [
                    'name.required'=>'Bạn chưa nhập tiêu đề',
                    'name.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                    'name.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                    'id_lesson.required'=>'Bạn chưa chọn lesson'
                ]
            );
            $newWord = new NewWord;
            $newWord->name = $request->name;
            $newWord->translate = $request->translate;
            $newWord->id_lesson = $request->id_lesson;
            $newWord->lesson = $lesson[0]->title;
            $newWord->save();
            return redirect('admin/NewWord/add')->with('Information','Thêm thành công');
        } else if($type == 1){
            $extension = ['xls','xlsx','end'];
            if($request->hasFile('file')){
                $file = $request->file('file');
                $duoi = $file->getClientOriginalExtension();
                foreach ($extension as $key) {
                    # code...
                    if($key == 'end'){
                        return redirect('admin/Exercise/add')->with('Warning','Just except .xls, xlsx');
                        
                    }
                    else if($duoi == $key){
                        break;
                    }
                }
                // Excel::import(new NewWordImport, $file);
                $collections = (new NewWordImport)->toCollection($file);
                foreach($collections as $rows){
                    for($i = 1; $i < count($rows); $i++){
                        echo $rows[$i];
                        $newWord = new NewWord;
                        $newWord->name = $rows[$i][0];
                        $newWord->translate = $rows[$i][1];
                        $newWord->spelling = $rows[$i][2];
                        $newWord->id_lesson = $request->id_lesson;
                        $newWord->lesson = $lesson[0]->title;
                        $newWord->save();
                        return redirect('admin/NewWord/add')->with('Information','Thêm thành công');
                    }
                }
            }
        }
    }
    public function getEditNewWord($id){
        $newWord= NewWord::find($id);
        $lesson = Lesson::all();
        return view('admin.new-word.edit',['newWord'=>$newWord, 'lesson'=>$lesson]);
    }

    public function postEditNewWord(Request $request, $id){
        $newWord=NewWord::find($id);
        $lesson = Lesson::select('id', 'title')->where("id",$request->id_lesson)->get();
        $this->validate($request,
            [
                'name'=>'required|min:3|max:100',
                'id_lesson'=>'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập tiêu đề',
                'name.min'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'name.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                'id_lesson.required'=>'Bạn phải chọn lesson',
            ]  
        );
        $newWord->name = $request->name;
        $newWord->translate = $request->translate;
        $newWord->spelling = $request->spelling;
        $newWord->id_lesson = $request->id_lesson;
        $newWord->lesson = $lesson[0]->title;
        $newWord->save();
        return redirect('admin/NewWord/edit/'.$id)->with('Information','Sửa thành công');

        

    }    
    public function getDeleteNewWord($id)
    {
        $newWord = NewWord::find($id);
        $newWord->delete();

        return redirect('admin/NewWord/list') ->with('Information','Bạn đã xóa thành công');

    }
}
