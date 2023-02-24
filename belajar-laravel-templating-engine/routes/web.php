<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Akbar Angkasa",
        "email" => "akbar121202@gmail.com",
        "img" => "akbar-angkasa.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Akbar Angkasa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ut voluptatibus velit illum, cum recusandae culpa qui iusto quia suscipit tempore quibusdam, accusantium temporibus quisquam! Architecto placeat ullam libero ab. Ipsam nostrum consequuntur atque dicta excepturi quam similique nihil quisquam eius. Aliquam vitae explicabo officiis non adipisci et, temporibus odit id ratione! Dicta iusto sequi numquam iste tempore. Vitae, recusandae unde. Tempora, nostrum labore eveniet nisi aspernatur ducimus accusantium eius nesciunt in, obcaecati culpa molestiae ratione velit pariatur adipisci ad!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aqila Yumna Syafiqah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet id maxime dolore hic in iure, reiciendis adipisci ipsa eum debitis nulla mollitia velit dolor quasi accusamus eos aliquam culpa possimus optio neque sit nihil cumque perferendis porro. Aut nobis iste possimus omnis est consequuntur, natus harum culpa delectus expedita beatae perferendis blanditiis, dolore architecto enim quae debitis fugiat deleniti rem. Iusto aut quo corrupti sint ut ab facilis. Quod veritatis aperiam similique quae, aliquid rerum amet at consectetur, natus delectus, eveniet quos excepturi eum dolor voluptate pariatur. Est quidem magni nulla aliquid eos eum accusamus aperiam et, eaque, ex odio."
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts,
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Akbar Angkasa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ut voluptatibus velit illum, cum recusandae culpa qui iusto quia suscipit tempore quibusdam, accusantium temporibus quisquam! Architecto placeat ullam libero ab. Ipsam nostrum consequuntur atque dicta excepturi quam similique nihil quisquam eius. Aliquam vitae explicabo officiis non adipisci et, temporibus odit id ratione! Dicta iusto sequi numquam iste tempore. Vitae, recusandae unde. Tempora, nostrum labore eveniet nisi aspernatur ducimus accusantium eius nesciunt in, obcaecati culpa molestiae ratione velit pariatur adipisci ad!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aqila Yumna Syafiqah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet id maxime dolore hic in iure, reiciendis adipisci ipsa eum debitis nulla mollitia velit dolor quasi accusamus eos aliquam culpa possimus optio neque sit nihil cumque perferendis porro. Aut nobis iste possimus omnis est consequuntur, natus harum culpa delectus expedita beatae perferendis blanditiis, dolore architecto enim quae debitis fugiat deleniti rem. Iusto aut quo corrupti sint ut ab facilis. Quod veritatis aperiam similique quae, aliquid rerum amet at consectetur, natus delectus, eveniet quos excepturi eum dolor voluptate pariatur. Est quidem magni nulla aliquid eos eum accusamus aperiam et, eaque, ex odio."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Post",
        "post" => $new_post
    ]);
});