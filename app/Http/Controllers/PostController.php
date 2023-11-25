<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Theme;

class PostController extends Controller
{
    public function index(Post $post, Theme $theme)
    {
        // $time = intval(date('H'));
        // $time = 5;
        // if($time == 6){
        //     $theme = Theme::inRandomOrder()->first();
        // }
        
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(), 'theme' => $theme]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Post $post)
    {
        return view('posts/create')->with(['post' => $post->getPaginateByLimit()]);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    

}
