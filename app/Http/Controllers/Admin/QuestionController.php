<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionImport;
use App\Question;
use App\Exercise;
use App\Exam;

class QuestionController extends Controller
{
    //
    public function getListQuestion(){
        $question = Question::all();
        return view('admin.question.list',['question'=>$question]);
    }

    public function getAddQuestion(){
        $exercise = Exercise::all();
        $exam = Exam::all();
        return view('admin.question.add',['exercise'=>$exercise, 'exam'=>$exam]);
    }
    public function postAddQuestion(Request $request){
        $type = $request->type;
        $exercise = Exercise::select('id', 'title')->where("id",$request->id_exercise)->get();
        $exam = Exam::select('id', 'title')->where("id",$request->id_exam)->get();
        if($type == 2){
            $this->validate($request,
                [
                    'question'=>'required|min:3',
                ],
                [
                    'question.required'=>'Bạn chưa nhập tiêu đề',
                    'question.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
                ]
            );
            $question = new Question;
            $question->question = $request->question;
            $question->ans1 = $request->ans1;
            $question->ans2 = $request->ans2;
            $question->ans3 = $request->ans3;
            $question->ans4 = $request->ans4;
            $question->correctAnswer = $request->correctAnswer;
            $question->id_exercise = $request->id_exercise;
            $question->exercise = $exercise[0]->title;
            $question->id_exam = $request->id_exam;
            $question->exam = $exam[0]->title;
            $question->save();
            return redirect('admin/Question/add')->with('Information','Thêm thành công');
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
                // Excel::import(new QuestionImport, $file);
                $collections = (new QuestionImport)->toCollection($file);
                foreach($collections as $rows){
                    for($i = 1; $i < count($rows); $i++){
                        echo $rows[$i];
                        $question = new Question;
                        $question->question = $request->$rows[$i][0];
                        $question->ans1 = $request->$request->$rows[$i][1];
                        $question->ans2 = $request->$request->$rows[$i][2];
                        $question->ans3 = $request->$request->$rows[$i][3];
                        $question->ans4 = $request->$request->$rows[$i][4];
                        $question->correctAnswer = $request->$request->$rows[$i][5];
                        $question->id_exercise = $request->id_exercise;
                        $question->exercise = $exercise[0]->title;
                        $question->id_exam = $request->id_exam;
                        $question->exam = $exam[0]->title;
                        $question->save();
                        return redirect('admin/Question/add')->with('Information','Thêm thành công');
                    }
                }
            }
        }
    }
    public function getEditQuestion($id){
        $question= Question::find($id);
        $exercise = Exercise::all();
        $exam = Exam::all();
        return view('admin.question.edit',['question'=>$question, 'exercise'=>$exercise, 'exam'=>$exam]);
    }

    public function postEditQuestion(Request $request, $id){
        $this->validate($request,
            [
                'question'=>'required|min:3',
            ],
            [
                'question.required'=>'Bạn chưa nhập tiêu đề',
                'question.max'=>'Tên tiêu đề phải có đọ dài từ 3 cho đến 100 hý tự',
            ]  
        );
        $question=Question::find($id);
        $exercise = Exercise::select('id', 'title')->where("id",$request->id_exercise)->get();
        $exam = Exam::select('id', 'title')->where("id",$request->id_exam)->get();
        $question->question = $request->question;
        $question->ans1 = $request->ans1;
        $question->ans2 = $request->ans2;
        $question->ans3 = $request->ans3;
        $question->ans4 = $request->ans4;
        $question->correctAnswer = $request->correctAnswer;
        $question->id_exercise = $request->id_exercise;
        $question->exercise = $exercise[0]->title;
        $question->id_exam = $request->id_exam;
        $question->exam = $exam[0]->title;
        $question->save();
        return redirect('admin/Question/edit/'.$id)->with('Information','Sửa thành công');

        

    }    
    public function getDeleteQuestion($id)
    {
        $question = Question::find($id);
        $question->delete();

        return redirect('admin/Question/list') ->with('Information','Bạn đã xóa thành công');

    }
}
