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

    public function delete($id){
        Tag::destroy($id);

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

        $tag = Tag::find('019dbb5e-7dfc-7182-b9a2-c2007176871e');

        $tag->posts()->attach('87aa55ca-aed8-433c-83f8-582ca6a9a23a');

        return response()->json(([
            'tag' => $tag->title,
            'posts' => $tag->posts

        ]));

    }
}
