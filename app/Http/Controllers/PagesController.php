<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Role;
use App\Like;

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

    public function like(Request $request)
    {
        $like_status = $request->like_s;
        $post_id = json_decode($request->post_id);
        $change_like=0;

        $like = Like::where('post_id',$post_id)->where('user_id',Auth::user()->id)->first();
        if(!$like)
        {
            $like = new Like;
            $like->post_id = $post_id;
            $like->user_id = Auth::user()->id;
            $like->like = 1;
            $like->save();
            $is_like=1;
        }
        elseif($like->like == 1)
        {
            //dd('delete');
            Like::Where('post_id' , $post_id)->where('user_id',Auth::user()->id)->delete();
             $is_like=0;
        }
        elseif($like->like == 0)
        {
            Like::Where('post_id' , $post_id)->where('user_id',Auth::user()->id)->update(['like' => 1]);
            $is_like=1;
            $change_like=1;
        }

        $response = array(
            'is_like' => $is_like,
            'change_like' => $change_like,
        );
        return response()->json($response , 200);
    }


    public function dislike(Request $request)
    {
        $like_status = $request->like_s;
        $post_id = json_decode($request->post_id);
        $change_like=0;

        $dislike = Like::where('post_id',$post_id)->where('user_id',Auth::user()->id)->first();
        if(!$dislike)
        {
            $dislike = new Like;
            $dislike->post_id = $post_id;
            $dislike->user_id = Auth::user()->id;
            $dislike->like = 0;
            $dislike->save();
            $dis_like=1;
        }
        elseif($dislike->like == 0)
        {
            //dd('delete');
            Like::Where('post_id' , $post_id)->where('user_id',Auth::user()->id)->delete();
             $dis_like=0;
        }
        elseif($dislike->like == 1)
        {
            Like::Where('post_id' , $post_id)->where('user_id',Auth::user()->id)->update(['like' => 0]);
            $dis_like=1;
            $change_like=1;
        }

        $response = array(
            'dis_like' => $dis_like,
            'change_like' => $change_like,
        );
        return response()->json($response , 200);
    }
}