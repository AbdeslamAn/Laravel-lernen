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


    function testManyToMany(){
        // $post46 = Post::find(46);
        // $post51 = Post::find(51);

        // $post46->tags()->attach([1,5]);
        // $post51->tags()->attach([5]);

        // return response()->json(([
        //     'post46' => $post46->tags,
        //     'post51' => $post51->tags

        // ]));

        $tag = Tag::find(1);

        $tag->posts()->attach((46));

        return response()->json(([
            'tag' => $tag->title,
            'posts' => $tag->posts

        ]));

    }
}
