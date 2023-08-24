<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Sangarya",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laboriosam architecto repellendus 
        velit explicabo exercitationem quisquam ducimus amet dolorem assumenda magni minus doloribus sed voluptate, ratione eaque 
        mollitia itaque veritatis! Iure temporibus beatae eveniet ipsam illum commodi ipsa adipisci rem, obcaecati ea molestias magni 
        nisi officiis, saepe aliquam libero iusto vitae eos deserunt necessitatibus dolor omnis nulla accusamus. Hic doloremque nihil 
        voluptate in ad obcaecati minus inventore! Nemo magni delectus animi est iusto veritatis ipsam modi quia, eius consequatur illo 
        repellendus rerum. Iure quia placeat aperiam expedita quae, laboriosam asperiores tempora fugit officia neque sint hic reiciendis 
        labore deserunt ipsam."
        ], [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Sangarya",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sapiente saepe magni iste dignissimos deserunt eaque, 
        tempora maxime dolor veritatis voluptates velit ratione doloremque inventore. Quos delectus enim odit, ipsam quam ut commodi ducimus 
        corrupti, perspiciatis velit nemo in qui possimus est corporis repudiandae natus eos nisi ipsa? Commodi rerum libero consectetur 
        odio. Minima iusto assumenda sunt rem reprehenderit, sit omnis incidunt quae tempore, tenetur eveniet nulla? Corrupti, porro enim d
        olore tempora dignissimos libero amet similique? Ad sint consectetur, dicta obcaecati cum cumque. Eligendi debitis animi rerum nisi 
        officiis minima, odit recusandae repudiandae dolores sint exercitationem adipisci earum iusto delectus tenetur atque saepe veritatis 
        ex voluptatibus porro provident? Autem, et."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}