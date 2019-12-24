<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    function getComment(){

    }

    function postComment(Request $request, $id_user, $type, $id_type){
        if(isset($request->content)){
            $comment = new Comment;
            $comment->content = $request->content;
            $comment->id_user = $id_user;
            if($type == 'lesson'){
                $comment->id_lesson = $id_type;
            } else if ($type == 'exercise'){
                $comment->id_exercise = $id_type;
            } else if( $type == 'exam'){
                $comment->id_exam = $id_type;
            }
            $comment->save();
            echo $comment;
            return back()->with('Information',"Bình luận thành công");
        }
        return back()->with('Warning','Bạn chưa nhập nội dung');
    }

    function getDeleteComment($id_user, $id){
        $comment = Comment::where('id', $id)->where('id_user', $id_user)->first();
        if($comment){
            $comment->delete();
            return back()->with('Information','Xoá thành công');
        }
    }
}
