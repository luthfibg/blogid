<?php

use App\Models\Blog;
use App\Models\Saga;
use App\Models\User;
use App\Models\BlogCategory;
use App\Models\SagaCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\SignController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sign-in', [SignController::class, 'signin']);

Route::post('/sign-in', [SignController::class, 'authenticate'])->name('sign-in');


Route::get('/sign-up', [SignController::class, 'signup']);

Route::post('/sign-up', [SignController::class, 'create'])->name('sign-up');

Route::get('/sign-out', [SignController::class, 'signout'])->name('sign-out');

Route::get('/home', [ChartController::class, 'blogsBasedOnCategories'])->name('home')->middleware('auth');

Route::get('/', [BlogController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']);

Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

// Route::get('authors-blog/{user:username}', function(User $user) {
//     return view('blogs', ['title' => (count($user->blogs)) . ' Blog oleh ' . $user->name, 'blogs' => $user->blogs]);
// });

// Route::get('categories-blog/{blogCategory:slug}', function(BlogCategory $blogCategory) {
//     return view('blogs', ['title' => (count($blogCategory->blogs)) . ' Blog tentang ' . $blogCategory->name, 'blogs' => $blogCategory->blogs]);
// });

Route::get('/sagas', function() {
    $sagas = Saga::with('author', 'sagaCategory')->latest()->get();
    return view('sagas', ['title' => 'Semua Kisah', 'sagas' => $sagas ]);
});

Route::get('sagas/{saga:slug}', function(Saga $saga) {
    return view('saga', ['title' => 'Baca Bagian', 'saga' => $saga]);
});

Route::get('authors-saga/{user:username}', function(User $user) {
    return view('sagas', ['title' => (count($user->sagas)) . ' Bagian oleh ' . $user->name, 'sagas' => $user->sagas]);
});

Route::get('categories-saga/{sagaCategory:slug}', function(SagaCategory $sagaCategory) {
    return view('sagas', ['title' => (count($sagaCategory->sagas)) . ' Bagian tentang ' . $sagaCategory->name, 'sagas' => $sagaCategory->sagas]);
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
