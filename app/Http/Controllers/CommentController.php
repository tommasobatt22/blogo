<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create($id){
        
        return view('comments/create',[
            "article" => Article::find($id)
        ]);
    }

    public function store($id, Request $request){
        if (Auth::check()) {
            $user = Auth::user();
        
            $comment = new Comment();

            $comment->content = $request->content;
            $comment->author = $user->name;
            $comment->article_id = $id;

            $comment->save();

        }
        return redirect()->back();
        
        
    }
}
