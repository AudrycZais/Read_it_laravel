<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function ajaxInsert(Request $request){
        $comment = new Comment;
        $comment->pseudo = $request->pseudo;
        $comment->pseudo = $request->text;
        $comment->pseudo = $request->postID;
        $comment->save();
        return view ('comments._show', ['comment' =>$comment]);
        
    }

}
