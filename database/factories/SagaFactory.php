<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saga>
 */
class SagaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(),
            'project' => fake()->word(),
            'season' => fake()->word(),
            'tile' => strval(fake()->randomFloat(1, 1, 3)),
            'rate' => fake()->randomFloat(1, 1, 5),
            'body' => fake()->paragraph(5, true),
        ];
    }
}
