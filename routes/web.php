<?php

use App\Models\Blog;
use App\Models\Saga;
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
    return view('sagas', ['title' => 'Semua Kisah', 'sagas' => Saga::all()]);
});

Route::get('sagas/{slug}', function($slug) {
    $saga = Saga::find($slug);
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
