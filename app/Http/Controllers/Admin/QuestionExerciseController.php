<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionImport;
use App\QuestionExercise;
use App\Exercise;

class QuestionExerciseController extends Controller
{
    //
    public function getListQuestion(){
        $question = QuestionExercise::all();
        return view('admin.question-exercise.list',['question'=>$question]);
    }

    public function getAddQuestion(){
        $exercise = Exercise::all();
        return view('admin.question-exercise.add',['exercise'=>$exercise]);
    }
    public function postAddQuestion(Request $request){
        $type = $request->type;
        $exercise = Exercise::select('id', 'title')->where("id",$request->id_exercise)->first();
        
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
            if(isset($request->id_exercise)){
                $question_exercise = new QuestionExercise;
                $question_exercise->question = $request->question;
                $question_exercise->ans1 = $request->ans1;
                $question_exercise->ans2 = $request->ans2;
                $question_exercise->ans3 = $request->ans3;
                $question_exercise->ans4 = $request->ans4;
                $question_exercise->correctAnswer = $request->correctAnswer;
                $question_exercise->id_exercise = $request->id_exercise;
                $question_exercise->exercise = $exercise[0]->title;
                $question_exercise->save();
                return redirect('admin/QuestionExercise/add')->with('Information','Thêm thành công');
            }
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
                if(isset($request->id_exercise)){
                    foreach($collections as $rows){
                        for($i = 1; $i < count($rows); $i++){
                            $question_exercise = new QuestionExercise;
                            $question_exercise->question = $rows[$i][0];
                            $question_exercise->ans1 = $rows[$i][1];
                            $question_exercise->ans2 = $rows[$i][2];
                            $question_exercise->ans3 = $rows[$i][3];
                            $question_exercise->ans4 = $rows[$i][4];
                            $question_exercise->correctAnswer = $rows[$i][5];
                            $question_exercise->id_exercise = $request->id_exercise;
                            $question_exercise->exercise = $exercise->title;
                            $question_exercise->save();
                        }
                    }
                    return redirect('admin/QuestionExercise/add')->with('Information','Thêm thành công.');
                }
            } else 
                return redirect('admin/QuestionExercise/add')->with('Warning','You must up your excel file in multi mode');
        }
    }
    public function getEditQuestion($id){
        $question= QuestionExercise::find($id);
        $exercise = Exercise::all();
        return view('admin.question-exercise.edit',['question'=>$question, 'exercise'=>$exercise]);
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
        $question=QuestionExercise::find($id);
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
        $question->save();
        return redirect('admin/QuestionExercise/edit/'.$id)->with('Information','Sửa thành công');

        

    }    
    public function getDeleteQuestion($id)
    {
        $question = QuestionExercise::find($id);
        $question->delete();

        return redirect('admin/QuestionExercise/list') ->with('Information','Bạn đã xóa thành công');

    }
}