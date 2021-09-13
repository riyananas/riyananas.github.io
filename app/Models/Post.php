<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Riyan Anas Setiyawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Cras scelerisque congue sem, ac molestie ligula blandit at.
In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
Vivamus sed feugiat purus. 
Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
Pellentesque ultrices libero eget magna venenatis ornare. 
Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
Proin ut varius erat. Morbi at condimentum sapien."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rama Krniawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Cras scelerisque congue sem, ac molestie ligula blandit at.
In enim urna, posuere eget fermentum accumsan, finibus vitae tortor.
Vivamus sed feugiat purus. 
Vestibulum sit amet lectus efficitur, gravida lectus in, fringilla felis. 
Pellentesque ultrices libero eget magna venenatis ornare. 
Etiam ligula nulla, congue ac dolor id, interdum dignissim lectus. 
Vestibulum vel ligula arcu. Nunc eget mollis nunc. 
Proin ut varius erat. Morbi at condimentum sapien.

Quisque vehicula imperdiet leo nec facilisis.
Nam et ante nec tellus rhoncus efficitur vitae in ligula.
Nam viverra a libero nec porta.
Sed a turpis quis eros pharetra fermentum in ac sapien.
Curabitur fringilla interdum leo, nec varius est feugiat id.
Quisque massa ante, dictum in tellus nec, gravida eleifend sem. 
Cras in purus ut tortor tincidunt faucibus."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
