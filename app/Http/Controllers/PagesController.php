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

    public function post($id)
    {
        $post = Post::find($id);
        return view('content.post',compact('post'));
    }

    public function store()
    {
        Post::create(request()->all());
        return redirect('/posts');
    }
}