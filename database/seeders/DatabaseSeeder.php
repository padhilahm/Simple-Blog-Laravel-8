<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'padhilahm',
            'name' => 'Muhammad Padhilah',
            'email' => 'padhilahm@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();


        // User::create([
        //     'name' => 'Padhilah',
        //     'email' => 'pad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id suscipit in unde voluptas eos facilis minus commodi ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id
        //     suscipit in unde voluptas eos facilis minus commodi aspernatur totam inventore eius magnam perspiciatis deserunt
        //     molestias laboriosam cupiditate, enim eaque sed odio at! Facere, quod deserunt perspiciatis minima enim dolor quia sit
        //     repellendus odio officiis veniam aliquam, aliquid, impedit dicta possimus voluptas sequi nobis harum temporibus sint eum
        //     optio mollitia! Saepe quae, aut ducimus aspernatur quasi accusamus minus ea error fugit reiciendis praesentium sapiente
        //     reprehenderit nisi quisquam repellat veritatis eius impedit odio optio! Aperiam harum autem, repellat modi porro vero?
        //     Sequi saepe commodi quia reprehenderit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id suscipit in unde voluptas eos facilis minus commodi ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id
        //     suscipit in unde voluptas eos facilis minus commodi aspernatur totam inventore eius magnam perspiciatis deserunt
        //     molestias laboriosam cupiditate, enim eaque sed odio at! Facere, quod deserunt perspiciatis minima enim dolor quia sit
        //     repellendus odio officiis veniam aliquam, aliquid, impedit dicta possimus voluptas sequi nobis harum temporibus sint eum
        //     optio mollitia! Saepe quae, aut ducimus aspernatur quasi accusamus minus ea error fugit reiciendis praesentium sapiente
        //     reprehenderit nisi quisquam repellat veritatis eius impedit odio optio! Aperiam harum autem, repellat modi porro vero?
        //     Sequi saepe commodi quia reprehenderit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id suscipit in unde voluptas eos facilis minus commodi ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id
        //     suscipit in unde voluptas eos facilis minus commodi aspernatur totam inventore eius magnam perspiciatis deserunt
        //     molestias laboriosam cupiditate, enim eaque sed odio at! Facere, quod deserunt perspiciatis minima enim dolor quia sit
        //     repellendus odio officiis veniam aliquam, aliquid, impedit dicta possimus voluptas sequi nobis harum temporibus sint eum
        //     optio mollitia! Saepe quae, aut ducimus aspernatur quasi accusamus minus ea error fugit reiciendis praesentium sapiente
        //     reprehenderit nisi quisquam repellat veritatis eius impedit odio optio! Aperiam harum autem, repellat modi porro vero?
        //     Sequi saepe commodi quia reprehenderit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id suscipit in unde voluptas eos facilis minus commodi ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore doloribus perspiciatis! Aliquid sunt id
        //     suscipit in unde voluptas eos facilis minus commodi aspernatur totam inventore eius magnam perspiciatis deserunt
        //     molestias laboriosam cupiditate, enim eaque sed odio at! Facere, quod deserunt perspiciatis minima enim dolor quia sit
        //     repellendus odio officiis veniam aliquam, aliquid, impedit dicta possimus voluptas sequi nobis harum temporibus sint eum
        //     optio mollitia! Saepe quae, aut ducimus aspernatur quasi accusamus minus ea error fugit reiciendis praesentium sapiente
        //     reprehenderit nisi quisquam repellat veritatis eius impedit odio optio! Aperiam harum autem, repellat modi porro vero?
        //     Sequi saepe commodi quia reprehenderit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
