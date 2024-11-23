<?php

namespace App\Jobs;

use App\Models\Blog;
use App\Models\Badge;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateBadge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, SerializesModels;

    public $authorId;
    public $opened;

    /**
     * Create a new job instance.
     */
    public function __construct($authorId, $opened)
    {
        $this->authorId = $authorId;
        $this->opened = $opened;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $badge = Badge::firstOrCreate(
            ['user_id' => $this->authorId],
            ['number_of_posts' => 0]
        );

        // Periksa jumlah opened dan tingkatkan badge yang relevan
        if ($this->opened >= 50 && $this->opened <= 200) {
            $badge->increment('copper_posts');
        } elseif ($this->opened >= 201 && $this->opened <= 1000) {
            $badge->increment('silver_posts');
        } elseif ($this->opened > 1000) {
            $badge->increment('gold_posts');
        }

        $badge->save();
    }
}
