<?php

use App\Models\Blog;
use App\Models\Saga;
use App\Models\User;
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

Route::get('blogs/{blog:slug}', function(Blog $blog) {
    return view('blog', ['title' => 'Baca Blog', 'blog' => $blog]);
});

Route::get('authors-blog/{user:username}', function(User $user) {
    return view('blogs', ['title' => (count($user->blogs)) . ' Blog oleh ' . $user->name, 'blogs' => $user->blogs]);
});

Route::get('/sagas', function() {
    return view('sagas', ['title' => 'Semua Kisah', 'sagas' => Saga::all()]);
});

Route::get('sagas/{saga:slug}', function(Saga $saga) {
    return view('saga', ['title' => 'Baca Bagian', 'saga' => $saga]);
});

Route::get('authors-saga/{user:username}', function(User $user) {
    return view('sagas', ['title' => (count($user->sagas)) . ' Bagian oleh ' . $user->name, 'sagas' => $user->sagas]);
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
