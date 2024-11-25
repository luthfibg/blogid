<?php

namespace App\Providers;

use App\Models\Blog;
use App\Policies\BlogPolicy;
use App\Observers\BlogObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('form-template', \App\View\Components\FormTemplate::class);
        Route::aliasMiddleware('track.blog.view', \App\Http\Middleware\TrackBlogView::class);
        Blog::observe(BlogObserver::class);
    }
}
