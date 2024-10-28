<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

class Saga
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'prolog-niimus',
                'title' => 'Prolog: Niimus',
                'author' => 'Muhamad Luthfi',
                'project' => 'Niimus',
                'season' => 'Prolog Utama',
                'tile' => '1.0',
                'rate' => '5.0',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptatum dicta reiciendis facilis totam unde enim expedita delectus, impedit hic nam ducimus fuga aut a aliquam consectetur dolor, veritatis quos.',
            ],
            [
                'id' => 2,
                'slug' => 'cahaya-tirani',
                'title'=> 'Cahaya Tirani',
                'author' => 'Muhamad Luthfi',
                'project' => 'Niimus',
                'season' => 'Season 1',
                'tile'=> '1.1',
                'rate' => '4.5',
                'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam rerum mollitia fugit? Nisi quam eius, delectus modi iure similique, nihil id facilis, suscipit tempora nam. Eveniet odit quaerat doloremque.',
            ],
        ];
    }
    public static function find($slug):array {
        $saga = Arr::first(static::all(), fn($saga) => $saga['slug'] == $slug);

        if(! $saga) {
            abort(404);
        }

        return $saga;
    }
}
