<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategory::create([
            'name' => 'Pemrograman Web',
            'slug'=> 'pemrograman-web',            
        ]);

        BlogCategory::create([
            'name' => 'Pemrograman Mobile',
            'slug'=> 'pemrograman-mobile',
        ]);

        BlogCategory::create([
            'name' => 'Internet of Things',
            'slug'=> 'internet-of-things',
        ]);

        BlogCategory::create([
            'name' => 'Desain Grafis',
            'slug'=> 'desain-grafis',
        ]);

        BlogCategory::create([
            'name' => 'Machine Learning',
            'slug'=> 'machine-learning',
        ]);

        BlogCategory::create([
            'name' => 'Data Science',
            'slug'=> 'data-science',
        ]);

        BlogCategory::create([
            'name'=> 'Game Development',
            'slug'=> 'game-development',
        ]);
    }
}
