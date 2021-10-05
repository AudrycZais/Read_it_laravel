<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        $posts= Post::orderBy('created_at', 'DESC')
        ->take(10)
        ->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
        
    public function ajaxOlders(Request $request){
        $posts= Post::orderBy('created_at', 'DESC')
        ->take(10)
        ->offset($request->get('offset'))
        ->get();
        
        return view('posts.liste', compact('posts'));
    }
}
