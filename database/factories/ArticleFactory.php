<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(7);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category' => $this->faker->randomElement(['Tech', 'Lifestyle', 'Bussiness', 'Health']),
            'on_trending' => $this->faker->boolean(20),
            'author' => $this->faker->name(),
            'body' => $this->faker->paragraphs(4, true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
