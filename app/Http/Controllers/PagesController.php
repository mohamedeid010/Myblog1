<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function posts()
    {
       $posts = Post::All();
        return view('content.posts',compact('posts'));
    }
}
