<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Theme;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user = \Auth::user();
        return view('posts/history')->with(['user' => $user]);
    }
    
    public function admin(User $user, Theme $theme)
    {
        $user = \Auth::user();
        if ($user->id == 1)
        {
            return view('posts/admin')->with(['theme' => $theme->get()]);
        } else {
           return view('posts/index'); 
        }
    }
    
    public function store(Request $request, Theme $theme)
    {
        $id = $request->theme;
        $TargetTheme = $theme->where('id', $id)->first();
        $TargetTheme->is_selected = true;
        $theme->where("id", '!=', $id)->update(['is_selected' => false]);
        $TargetTheme->save();
        return redirect('/');
        
    }
    
}
