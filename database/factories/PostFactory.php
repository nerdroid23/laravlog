<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'uuid'       => $this->faker->uuid(),
            'slug'       => $this->faker->slug(),
            'title'      => $this->faker->words(nb: rand(5, 10), asText: true),
            'body'       => $this->faker->paragraph(),
            'teaser'     => $this->faker->paragraph(),
            'published'  => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
