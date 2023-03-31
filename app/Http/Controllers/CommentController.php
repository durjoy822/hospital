<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public  function CommentIndex(){
        return view('admin.comment.index',[
            'comments'=>Comment::all(),
        ]);
    }
    public function commentStore(Request $request){
//        dd($comment);
        $comment=new Comment();
        $comment->blog_id=$request->blog_id;
        $comment->user_id = Auth::id();
        $comment->comment=$request->comment;
        $comment->save();
        return back();




    }
}
