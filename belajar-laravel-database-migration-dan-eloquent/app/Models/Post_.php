<?php

namespace App\Models;

class Posts
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
