<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuestionExam;
use App\Exam;

class QuestionExamController extends Controller
{
    //
    public function getListQuestion(){
        $question = QuestionExam::all();
        return view('admin.question-exam.list',['question'=>$question]);
    }

    public function getAddQuestion(){
        $exam = Exam::all();
        return view('admin.question-exam.add',['exam'=>$exam]);
    }
    public function postAddQuestion(Request $request){
        $type = $request->type;
        $exam = Exam::select('id', 'title')->where("id",$request->id_exam)->first();
        $question_exam = new QuestionExam;
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
            if($request->typeof == 2 && isset($request->id_exam)){
                $question_exam->question = $request->question;
                $question_exam->ans1 = $request->ans1;
                $question_exam->ans2 = $request->ans2;
                $question_exam->ans3 = $request->ans3;
                $question_exam->ans4 = $request->ans4;
                $question_exam->correctAnswer = $request->correctAnswer;
                $question_exam->id_exam = $request->id_exam;
                $question_exam->exam = $exam[0]->title;
                $question_exam->save();
                return redirect('admin/QuestionExam/add')->with('Information','Thêm thành công');
            }
        } else if($type == 1){
            $extension = ['xls','xlsx','end'];
            if($request->hasFile('file')){
                $file = $request->file('file');
                $duoi = $file->getClientOriginalExtension();
                foreach ($extension as $key) {
                    # code...
                    if($key == 'end'){
                        return redirect('admin/QuestionExam/add')->with('Warning','Just except .xls, xlsx');
                        
                    }
                    else if($duoi == $key){
                        break;
                    }
                }
                // Excel::import(new QuestionImport, $file);
                $collections = (new QuestionImport)->toCollection($file);
                if($request->typeof == 2 && $request->id_exam){
                    foreach($collections as $rows){
                        for($i = 1; $i < count($rows); $i++){
                            $question_exam->question = $rows[$i][0];
                            $question_exam->ans1 = $rows[$i][1];
                            $question_exam->ans2 = $rows[$i][2];
                            $question_exam->ans3 = $rows[$i][3];
                            $question_exam->ans4 = $rows[$i][4];
                            $question_exam->correctAnswer = $rows[$i][5];
                            $question_exam->id_exam = $request->id_exam;
                            $question_exam->exam = $exam->title;
                            $question_exam->save();
                        }
                    }
                    return redirect('admin/QuestionExam/add')->with('Information','Thêm thành công');
                }
            } else 
                return redirect('admin/QuestionExam/add')->with('Warning','You must up your excel file in multi mode');
        }
    }
    public function getEditQuestion($id){
        $question= QuestionExam::find($id);
        $exam = Exam::all();
        return view('admin.question-exam.edit',['question'=>$question, 'exam'=>$exam]);
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
        $question=QuestionExam::find($id);
        $exam = Exam::select('id', 'title')->where("id",$request->id_exam)->get();
        $question->question = $request->question;
        $question->ans1 = $request->ans1;
        $question->ans2 = $request->ans2;
        $question->ans3 = $request->ans3;
        $question->ans4 = $request->ans4;
        $question->correctAnswer = $request->correctAnswer;
        $question->id_exam = $request->id_exam;
        $question->exam = $exam[0]->title;
        $question->save();
        return redirect('admin/QuestionExam/edit/'.$id)->with('Information','Sửa thành công');

        

    }    
    public function getDeleteQuestion($id)
    {
        $question = QuestionExam::find($id);
        $question->delete();

        return redirect('admin/QuestionExam/list') ->with('Information','Bạn đã xóa thành công');

    }
}
