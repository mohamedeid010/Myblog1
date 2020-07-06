<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\File; 

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::Paginate(10);
        return view('admin.article.view',compact('posts'));
    }
///////////////////////////////////////////////////////////////////////////
    public function update(Post $post , $id)
    {
        $post = $post->find($id);
        $categories = Category::All();
        return view('admin.article.edit',compact('post','categories'));
    }
/////////////////////////////////////////////////////////////////////////////
    public function save(Request $request , $id)
    {
        $post = Post::find($id);
        $filename = public_path('upload/'.$post->image);

        if($request->image)
        {
            $img_name = time().$request->image->getClientOriginalName();
            $post->image = $img_name;
            File::delete($filename);
        }
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->body = $request->body;
        $post->save();
        $request->image->move(public_path('upload'),$img_name);
        return redirect('/admin/article');
    }
//////////////////////////////////////////////////////////////////////////////////////
    public function destroy($id)
    {
        $post = Post::find($id);
        $filename = public_path('upload/'.$post->image);
        File::delete($filename);
        $post->delete();
        return redirect('/admin/article');
    }
////////////////////////////////////////////////////////////////////////////////////
    public function change_status($id)
    {
        $post = Post::find($id);
        if($post->status == 0)
        {
            $post->status = 1;
            $post->save();
        }
        else{
            $post->status = 0;
            $post->save();
        }
        return redirect('/admin/article');
    }        
}
