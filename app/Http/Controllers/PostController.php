<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use HasFactory;
    function index(){
        // Eloquent ORM -> Get all data
        $data = Post::cursorPaginate(4);

        // Pass the data to the view
        return view('post.index', ['posts' => $data]);
    }

    function show($id){
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }

    function create(){
        $post = Post::create([
            'title' => 'My first Post',
            'body' => 'This is my content',
            'author' => 'Abdeslam',
            'published' => true
        ]);

        return redirect('/blog');
    }

    public function delete(){
        Post::destroy(13);
    }
}
