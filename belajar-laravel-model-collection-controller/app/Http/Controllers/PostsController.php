<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Blog",
            "posts" => Posts::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Post",
            "post" => Posts::find($slug)
        ]);
    }
}
