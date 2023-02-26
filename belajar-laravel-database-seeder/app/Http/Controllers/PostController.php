<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    // Kode dibawah menggunakan Route Model Binding
    public function show(Post $post){
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}