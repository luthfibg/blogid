<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Badge;
use Illuminate\Console\Command;

class SyncBadges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-badges';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $badges = Badge::all();
        foreach ($badges as $badge) {
            $numberOfPosts = Blog::where('author_id', $badge->user_id)->count();
            $badge->update(['number_of_posts' => $numberOfPosts]);
        }

        $this->info('Badges synchronized successfully.');
    }
}
