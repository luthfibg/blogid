<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Beranda BLOGID']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Semua Blog'], ['posts'=> [
        [
            'id' => 1,
            'slug' => 'prolog-niimus',
            'title' => 'Prolog: Niimus',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Prolog Utama',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptatum dicta reiciendis facilis totam unde enim expedita delectus, impedit hic nam ducimus fuga aut a aliquam consectetur dolor, veritatis quos.',
        ],
        [
            'id' => 2,
            'slug' => 'cahaya-tirani',
            'title'=> 'Cahaya Tirani',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Season 1',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam rerum mollitia fugit? Nisi quam eius, delectus modi iure similique, nihil id facilis, suscipit tempora nam. Eveniet odit quaerat doloremque.',
        ],
    ]]);
});

Route::get('posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'prolog-niimus',
            'title' => 'Prolog: Niimus',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Prolog Utama',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptatum dicta reiciendis facilis totam unde enim expedita delectus, impedit hic nam ducimus fuga aut a aliquam consectetur dolor, veritatis quos.',
        ],
        [
            'id' => 2,
            'slug' => 'cahaya-tirani',
            'title'=> 'Cahaya Tirani',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Season 1',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam rerum mollitia fugit? Nisi quam eius, delectus modi iure similique, nihil id facilis, suscipit tempora nam. Eveniet odit quaerat doloremque.',
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Baca Blog', 'post' => $post]);
});

Route::get('/about', function() {
    return view('about', ['title'=> 'Tentang Kami']);
});

Route::get('/contact', function() {
    return view('contact', ['title'=> 'Kontak Pengembang']);
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/settings', function() {
    return view('settings');
});

Route::get('/signout', function() {
    return view('contact');
});
