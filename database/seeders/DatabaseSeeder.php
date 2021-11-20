<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'sandhika Galih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Doddy Ferdiansyah',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eligendi harum nobis atque commodi.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit assumenda asperiores tempora non facilis nam ad maxime sint eligendi! Eum sequi nesciunt a sapiente porro omnis dolorem esse iure neque illo, rem odio deleniti quidem maxime illum facere doloremque pariatur exercitationem, consequatur magnam. Ab, magni pariatur! Alias corrupti unde aperiam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore corporis aperiam vero provident at similique sapiente, unde iusto. Illum iure inventore natus dolorum exercitationem!</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eligendi harum nobis atque commodi.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit assumenda asperiores tempora non facilis nam ad maxime sint eligendi! Eum sequi nesciunt a sapiente porro omnis dolorem esse iure neque illo, rem odio deleniti quidem maxime illum facere doloremque pariatur exercitationem, consequatur magnam. Ab, magni pariatur! Alias corrupti unde aperiam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore corporis aperiam vero provident at similique sapiente, unde iusto. Illum iure inventore natus dolorum exercitationem!</p>'
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eligendi harum nobis atque commodi.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit assumenda asperiores tempora non facilis nam ad maxime sint eligendi! Eum sequi nesciunt a sapiente porro omnis dolorem esse iure neque illo, rem odio deleniti quidem maxime illum facere doloremque pariatur exercitationem, consequatur magnam. Ab, magni pariatur! Alias corrupti unde aperiam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore corporis aperiam vero provident at similique sapiente, unde iusto. Illum iure inventore natus dolorum exercitationem!</p>'
        ]);
    }
}
