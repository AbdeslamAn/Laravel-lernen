<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        // Eloquent ORM -> Get all data
        $data = Tag::all();

        // Pass the data to the view
        return view('tag.index', ['tags' => $data]);
    }


    function create(){
        Tag::create([
            'title' => 'CSS',
        ]);

        return redirect('/tags');
    }

    public function delete(){
        Tag::destroy(4);

        return redirect('/tags');
    }


}
