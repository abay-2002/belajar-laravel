<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Akbar Angkasa',
            'email' => 'akbar121202@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
           'title' => 'Judul Pertama',
           'slug' => 'judul-pertama',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto,',
           'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto, a similique molestiae suscipit dolorem ea illum, assumenda recusandae soluta voluptatibus alias aliquid aspernatur maxime tempora? Totam, quod quae? Consectetur tempora ut incidunt velit temporibus, laboriosam unde omnis nobis possimus ea impedit nihil quod vitae perspiciatis, dolor deserunt aliquam blanditiis dolores voluptatem similique aspernatur. Iure dolorem corporis quam earum aut qui illo culpa, necessitatibus harum distinctio quibusdam quas mollitia voluptate labore placeat nostrum consequuntur dicta officiis quis autem ipsa laudantium adipisci reiciendis!',
           'category_id' => 1,
           'user_id' => 1
        ]);
        
        Post::create([
           'title' => 'Judul Ke Dua',
           'slug' => 'judul-ke-dua',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto,',
           'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto, a similique molestiae suscipit dolorem ea illum, assumenda recusandae soluta voluptatibus alias aliquid aspernatur maxime tempora? Totam, quod quae? Consectetur tempora ut incidunt velit temporibus, laboriosam unde omnis nobis possimus ea impedit nihil quod vitae perspiciatis, dolor deserunt aliquam blanditiis dolores voluptatem similique aspernatur. Iure dolorem corporis quam earum aut qui illo culpa, necessitatibus harum distinctio quibusdam quas mollitia voluptate labore placeat nostrum consequuntur dicta officiis quis autem ipsa laudantium adipisci reiciendis!',
           'category_id' => 1,
           'user_id' => 1
        ]);
       
        Post::create([
           'title' => 'Judul Ke Tiga',
           'slug' => 'judul-ke-tiga',
           'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto,',
           'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores error dignissimos enim debitis culpa asperiores! A error esse earum aut. In minus ut nisi voluptates odit architecto, a similique molestiae suscipit dolorem ea illum, assumenda recusandae soluta voluptatibus alias aliquid aspernatur maxime tempora? Totam, quod quae? Consectetur tempora ut incidunt velit temporibus, laboriosam unde omnis nobis possimus ea impedit nihil quod vitae perspiciatis, dolor deserunt aliquam blanditiis dolores voluptatem similique aspernatur. Iure dolorem corporis quam earum aut qui illo culpa, necessitatibus harum distinctio quibusdam quas mollitia voluptate labore placeat nostrum consequuntur dicta officiis quis autem ipsa laudantium adipisci reiciendis!',
           'category_id' => 2,
           'user_id' => 1
        ]);

    }
}
