<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'keywords' => $this->faker->word(),
            'excerpt' => $this->faker->word(),
            'body' => $this->faker->word(),
            'featured' => $this->faker->boolean(),
        ];
    }
}
