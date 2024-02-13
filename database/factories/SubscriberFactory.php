<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Subscriber;

class SubscriberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscriber::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->safeEmail(),
        ];
    }
}
