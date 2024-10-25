<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/myblogs', function() {
    return view('myblogs', ['title'=> 'My Blogs']);
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
