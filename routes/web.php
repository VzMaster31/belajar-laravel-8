<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
        "name" => "Rizky Pamungkas",
        "email" => "ah067622@gmail.com",
        "image" => "6.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio consequuntur aliquam culpa, sapiente laborum saepe repellat, vero inventore sed dolor itaque blanditiis natus doloribus harum neque rem id libero iure, dolorem sit. Perferendis ullam at aspernatur iusto molestiae error numquam unde neque quis nihil, voluptatum sint nostrum quasi ipsa libero et ea magnam? Voluptatibus, recusandae eum. Optio culpa sapiente dolorum, hic ea magnam et nesciunt sequi atque cupiditate deleniti beatae omnis quisquam, nobis voluptate sint, quasi illo assumenda maxime."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid atque facere placeat animi facilis dolor, nam quae, perferendis ad vero necessitatibus maxime illo nesciunt, repellat velit? Alias quos libero eius? Commodi, deleniti fuga. A vel placeat in corrupti beatae. Ducimus doloremque iure velit corrupti quidem ipsum nihil blanditiis sapiente voluptatibus molestiae eos, corporis incidunt eius reiciendis labore? Quaerat sunt numquam et vel exercitationem at cumque optio possimus impedit minus quibusdam praesentium nobis repellendus, ratione saepe tempore temporibus tempora ad debitis. Ea autem sunt modi, rerum sed iusto, repellat eligendi, architecto vero voluptates commodi? Nisi eos mollitia architecto recusandae unde."
        ]
    ];
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});


// Halaman sigle post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio consequuntur aliquam culpa, sapiente laborum saepe repellat, vero inventore sed dolor itaque blanditiis natus doloribus harum neque rem id libero iure, dolorem sit. Perferendis ullam at aspernatur iusto molestiae error numquam unde neque quis nihil, voluptatum sint nostrum quasi ipsa libero et ea magnam? Voluptatibus, recusandae eum. Optio culpa sapiente dolorum, hic ea magnam et nesciunt sequi atque cupiditate deleniti beatae omnis quisquam, nobis voluptate sint, quasi illo assumenda maxime."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid atque facere placeat animi facilis dolor, nam quae, perferendis ad vero necessitatibus maxime illo nesciunt, repellat velit? Alias quos libero eius? Commodi, deleniti fuga. A vel placeat in corrupti beatae. Ducimus doloremque iure velit corrupti quidem ipsum nihil blanditiis sapiente voluptatibus molestiae eos, corporis incidunt eius reiciendis labore? Quaerat sunt numquam et vel exercitationem at cumque optio possimus impedit minus quibusdam praesentium nobis repellendus, ratione saepe tempore temporibus tempora ad debitis. Ea autem sunt modi, rerum sed iusto, repellat eligendi, architecto vero voluptates commodi? Nisi eos mollitia architecto recusandae unde."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
