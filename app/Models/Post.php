<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p) {
        //     if( $p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
