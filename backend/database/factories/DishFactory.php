<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_path" => "", // TODO: デフォルト画像の用意
            "name" => app()->make(Generator::class)->dishName(),
            "description" => fake()->realText(30),
            "memo" => fake()->realText(30),
            "user_id" => User::factory(),
        ];
    }
}
