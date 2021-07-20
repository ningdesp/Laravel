<?php

namespace App\Http\Controllers;

use App\User;
use App\Profie;
use App\Post;
use ProfilesController;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /*public function index($user)
    {
        $user = Post::findOrFail($user); 
        return view('posts.create', [
            'user' => $user,
        ]);
    }
    */
    //User::findOrFail($user); 

    public function create(array $user)
    {
            
        $user = User::findOrFail($user); 
        return view('posts.create', [
            'user' => $user,
        ]);
    }

    
}

