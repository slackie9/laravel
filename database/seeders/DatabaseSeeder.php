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
            'name' => 'Nobita Nobi',
            'username' => 'Nobita',
            'email' => 'nobita@mail.com',
            'password' => bcrypt('12345')

        ]);

        // User::create([
        //     'name' => 'Shizuka Minamoto',
        //     'email' => 'shizuka@mail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Nobita Web',
            'slug' => 'nobita-web'
        ]);
        Category::create([
            'name' => 'Nobita Design',
            'slug' => 'nobita-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sint animi ex tempora nemo odit deserunt est tenetur harum eum, porro rerum excepturi ea blanditiis! Harum assumenda nam ipsam! Sunt nulla error, ratione, sit id corrupti asperiores magni rerum consectetur vel sint esse maxime. Rem, quo expedita? Officiis, sed nostrum? Voluptates, saepe, odit neque eius eligendi eum impedit magnam laudantium deserunt optio ut cum libero officia nesciunt? Fuga optio ducimus, at praesentium, a inventore ex laboriosam ipsa, quo deleniti minima delectus aliquid omnis ratione tempore possimus accusantium. A sit libero, nisi et unde, placeat soluta, error facere quod aspernatur asperiores.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sint animi ex tempora nemo odit deserunt est tenetur harum eum, porro rerum excepturi ea blanditiis! Harum assumenda nam ipsam! Sunt nulla error, ratione, sit id corrupti asperiores magni rerum consectetur vel sint esse maxime. Rem, quo expedita? Officiis, sed nostrum? Voluptates, saepe, odit neque eius eligendi eum impedit magnam laudantium deserunt optio ut cum libero officia nesciunt? Fuga optio ducimus, at praesentium, a inventore ex laboriosam ipsa, quo deleniti minima delectus aliquid omnis ratione tempore possimus accusantium. A sit libero, nisi et unde, placeat soluta, error facere quod aspernatur asperiores.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sint animi ex tempora nemo odit deserunt est tenetur harum eum, porro rerum excepturi ea blanditiis! Harum assumenda nam ipsam! Sunt nulla error, ratione, sit id corrupti asperiores magni rerum consectetur vel sint esse maxime. Rem, quo expedita? Officiis, sed nostrum? Voluptates, saepe, odit neque eius eligendi eum impedit magnam laudantium deserunt optio ut cum libero officia nesciunt? Fuga optio ducimus, at praesentium, a inventore ex laboriosam ipsa, quo deleniti minima delectus aliquid omnis ratione tempore possimus accusantium. A sit libero, nisi et unde, placeat soluta, error facere quod aspernatur asperiores.',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sint animi ex tempora nemo odit deserunt est tenetur harum eum, porro rerum excepturi ea blanditiis! Harum assumenda nam ipsam! Sunt nulla error, ratione, sit id corrupti asperiores magni rerum consectetur vel sint esse maxime. Rem, quo expedita? Officiis, sed nostrum? Voluptates, saepe, odit neque eius eligendi eum impedit magnam laudantium deserunt optio ut cum libero officia nesciunt? Fuga optio ducimus, at praesentium, a inventore ex laboriosam ipsa, quo deleniti minima delectus aliquid omnis ratione tempore possimus accusantium. A sit libero, nisi et unde, placeat soluta, error facere quod aspernatur asperiores.',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}
