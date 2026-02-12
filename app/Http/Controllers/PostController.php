<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // Eloquent ORM -> Get all data
        $data = Post::all();

        // Pass the data to the view
        return view('post.index', ['posts' => $data]);
    }
}
