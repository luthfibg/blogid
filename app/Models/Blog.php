<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

class Blog
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'kenalan-dengan-blogid',
                'title' => 'Kenalan Dengan Blogid',
                'author' => 'Muhamad Luthfi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, officia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, officia!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, officia!.',
            ],
            [
                'id' => 2,
                'slug' => 'tips-posting-blog-di-blogid',
                'title'=> 'Tips Posting Blog di Blogid',
                'author' => 'Muhamad Luthfi',
                'body'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius rerum natus tempora repudiandae nam, illum atque qui voluptatem quas fugiat quod consectetur corrupti inventore recusandae dolorum laudantium, maiores quis impedit?',
            ],
        ];
    }

    public static function find($slug) {
        return Arr::first(static::all(), function($blogs) use ($slug) {
            return $blogs['slug'] == $slug;
        });
    }
}
