<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user = \Auth::user();
        return view('posts/history')->with(['user' => $user]);
    }
}
