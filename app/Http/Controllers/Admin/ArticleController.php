<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::Paginate(2);
        return view('admin.article.view',compact('posts'));
    }
}
