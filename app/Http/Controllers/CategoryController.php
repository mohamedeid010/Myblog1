<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function showposts($id , $name)
    {
           $posts = Post::where('category_id',$id)->get();
           return view('content.posts',compact('posts'));
    }
}