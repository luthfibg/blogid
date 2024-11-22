<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\Badge;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        if ($blog->isDirty('opened')) { // Cek jika kolom 'opened' telah diperbarui
            $authorId = $blog->author_id;
            $badge = Badge::firstOrCreate(['user_id' => $authorId]);

            if ($blog->opened >= 50 && $blog->opened <= 200) {
                $badge->increment('copper_posts');
            } elseif ($blog->opened >= 201 && $blog->opened <= 1000) {
                $badge->increment('silver_posts');
            } elseif ($blog->opened > 1000) {
                $badge->increment('gold_posts');
            }

            $badge->save();
        }
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
