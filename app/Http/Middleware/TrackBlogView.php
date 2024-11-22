<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Blog;
use App\Models\Badge;
use App\Jobs\UpdateBadge;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackBlogView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Ambil instance model Blog dari parameter rute
         $blog = $request->route('blog');

         if ($blog) {
             $blog->increment('opened'); // Tambahkan 1 ke kolom opened
             $this->updateBadges($blog->author_id, $blog->opened); // Panggil updateBadges
         }

        return $next($request);
    }

    protected function updateBadges($authorId, $opened)
    {
        UpdateBadge::dispatch($authorId, $opened);
    }
}
