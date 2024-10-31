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
            'color' => 'blue',   
        ]);

        BlogCategory::create([
            'name' => 'Pemrograman Mobile',
            'slug'=> 'pemrograman-mobile',
            'color' => 'green',
        ]);

        BlogCategory::create([
            'name' => 'Internet of Things',
            'slug'=> 'internet-of-things',
            'color' => 'red',
        ]);

        BlogCategory::create([
            'name' => 'Desain Grafis',
            'slug'=> 'desain-grafis',
            'color' => 'yellow',
        ]);

        BlogCategory::create([
            'name' => 'Machine Learning',
            'slug'=> 'machine-learning',
            'color' => 'purple',
        ]);

        BlogCategory::create([
            'name' => 'Data Science',
            'slug'=> 'data-science',
            'color' => 'orange',
        ]);

        BlogCategory::create([
            'name'=> 'Game Development',
            'slug'=> 'game-development',
            'color' => 'gray',
        ]);
    }
}
