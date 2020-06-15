<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Role;

class PagesController extends Controller
{
    public function posts()
    {
        //$actions = request()->route()->getAction();
        //dd($actions);
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

    public function admin()
    {
        $users = User::All();
        return view('content.admin',compact('users'));
    }

    public function addrole(Request $request)
    {
        $user = User::where('email' , $request->email)->first();

        $user->roles()->detach();

        if($request->role_admin)
        {
            $user->roles()->attach(Role::where('name','admin')->first());
        }
        if($request->role_editor)
        {
            $user->roles()->attach(Role::where('name','editor')->first());
        }
        if($request->role_user)
        {
            $user->roles()->attach(Role::where('name','user')->first());
        }
        return redirect('/admin');
    }
}