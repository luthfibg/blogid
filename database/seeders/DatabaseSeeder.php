<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Saga;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\BlogCategory;
use App\Models\SagaCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([UserSeeder::class, BlogCategorySeeder::class, SagaCategorySeeder::class]);
        $this->call(BlogCategorySeeder::class);

        // Mengambil semua user kecuali yang dikustom berdasarkan email
        // $filteredUsers = User::where('email', '!=', 'luthfi@gmail.com')->get();
        BlogCategory::all();

        // Blog::factory(35)->recycle([
        //     $filteredUsers,
        //     BlogCategory::all(),
        // ])->create();

        // Saga::factory(15)->recycle([
        //     User::all(),
        //     SagaCategory::all(),
        // ])->create();
    }
}
