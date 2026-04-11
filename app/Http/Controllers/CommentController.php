<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    function index(){
        // Eloquent ORM -> Get all data
        $data = Comment::all();

        // Pass the data to the view
        return view('comment.index', ['comments' => $data]);
    }

    function show($id){
        $comment = Comment::findOrFail($id);

        return view('comment.show', ['comment' => $comment]);
    }

    function create(){
        $comment = Comment::create([
            'author' => 'Abdeslam',
            'content' => 'This is a Test Comment',
            'post_id' => 46
        ]);

        return redirect('/blog');
    }
}
