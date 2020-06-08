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

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'image' => 'image'
            ]
        );
        $img_name = time().$request->image->getClientOriginalExtension();
        Post::create([
            'title' => $request->title,
            'category_id' => $request->category,
            'body' => $request->body,
            'image' => $img_name,
            ]);
        $request->image->move(public_path('upload'),$img_name);
        return redirect('/posts');
    }
}