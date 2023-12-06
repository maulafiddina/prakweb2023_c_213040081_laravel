<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Ahmad Zidane F",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aliquam aut ut tenetur et natus consectetur, expedita aspernatur fugiat perferendis! Commodi soluta labore ea quibusdam doloribus quia fuga quas sint, maxime adipisci est ad esse quidem perspiciatis non dignissimos iusto possimus illo, laudantium quod ipsam expedita repudiandae dolorum? Soluta tempore maiores eius unde voluptatum aut facilis cumque, tenetur pariatur praesentium asperiores repellendus vero officia repudiandae atque iusto sapiente, velit placeat corporis error ut rem dolorum neque. Id veritatis autem officiis.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Ahmad Faturr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aliquam aut ut tenetur et natus consectetur, expedita aspernatur fugiat perferendis! Commodi soluta labore ea quibusdam doloribus quia fuga quas sint, maxime adipisci est ad esse quidem perspiciatis non dignissimos iusto possimus illo, laudantium quod ipsam expedita repudiandae dolorum? Soluta tempore maiores eius unde voluptatum aut facilis cumque.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }

}
