<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(20);

        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'thumbnail' => fake()->imageUrl(1000, 500),
            'content' => fake()->text(5000),
            'user_id' => 1,
            'active' => fake()->boolean(75),
            'published_at' => fake()->dateTimeThisYear(),
        ];
    }
}
