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
        $TargetTheme = $theme->where('is_selected', true)->first();
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(), 'theme' => $TargetTheme]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Post $post, Theme $theme)
    {
        $TargetTheme = $theme->where('is_selected', true)->first();
        return view('posts/create')->with(['post' => $post->getPaginateByLimit(), 'theme' => $TargetTheme]);
    }

    public function store(Post $post, Request $request)
    {
        // $input['user_id'] = \Auth::id();
        // $post = $request['post'];
        $post->user_id = \Auth::id();
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/');
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
