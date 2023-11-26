<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    public function create(Theme $theme)
    {
        
        return view('Themes/create')->with(['theme' => $theme]);
    }
    
    public function store(Request $request, Theme $theme)
    {
        $theme->user_id = \Auth::id();
        $theme->theme = $request->theme;
        $theme->save();
        return redirect('/');
    }
}
