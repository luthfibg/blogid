<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'All Blogs'], ['posts'=> [
        [
            'id' => 1,
            'title' => 'Prolog: Niimus',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Prolog Utama',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptatum dicta reiciendis facilis totam unde enim expedita delectus, impedit hic nam ducimus fuga aut a aliquam consectetur dolor, veritatis quos.',
        ],
        [
            'id' => 2,
            'title'=> 'Cahaya Tirani',
            'author' => 'Muhamad Luthfi',
            'project' => 'Niimus',
            'season' => 'Season 1',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit numquam rerum mollitia fugit? Nisi quam eius, delectus modi iure similique, nihil id facilis, suscipit tempora nam. Eveniet odit quaerat doloremque.',
        ],
    ]]);
});

Route::get('/about', function() {
    return view('about', ['title'=> 'About']);
});

Route::get('/contact', function() {
    return view('contact', ['title'=> 'Contact']);
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
