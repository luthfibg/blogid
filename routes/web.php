<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Beranda BLOGID']);
});

Route::get('/blogs', function() {
    return view('blogs', ['title' => 'Semua Blog', 'blogs' => Blog::all()]);
});

Route::get('blogs/{slug}', function($slug) {
    $blog = Blog::find($slug);
    return view('blog', ['title' => 'Baca Blog', 'blog' => $blog]);
});


Route::get('/sagas', function() {
    return view('sagas', ['title' => 'Semua Kisah'], ['sagas'=> [
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
    ]]);
});

Route::get('sagas/{slug}', function($slug) {
    $sagas = [
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
            'tile' => '1.1',
            'rate' => '4.5',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam rerum mollitia fugit? Nisi quam eius, delectus modi iure similique, nihil id facilis, suscipit tempora nam. Eveniet odit quaerat doloremque.',
        ],
    ];

    $saga = Arr::first($sagas, function($sagas) use ($slug) {
        return $sagas['slug'] == $slug;
    });

    return view('saga', ['title' => 'Baca Bagian', 'saga' => $saga]);
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
