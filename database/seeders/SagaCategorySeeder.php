<?php

namespace Database\Seeders;

use App\Models\SagaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SagaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SagaCategory::create([
            'name' => 'Sci-Fi',
            'slug'=> 'sci-fi',
        ]);

        SagaCategory::create([
            'name' => 'Romansa',
            'slug'=> 'romansa',
        ]);

        SagaCategory::create([
            'name' => 'Non-Fiction',
            'slug'=> 'non-fiction',
        ]);
    }
}
