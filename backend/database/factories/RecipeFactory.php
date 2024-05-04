<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    private static int $dishId = 0;
    private static int $step = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "instruction" => fake()->realText(30),
            "step" => self::$step++,
            "dish_id" => Dish::factory(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Recipe $ingredient) {
            if (self::$dishId !== $ingredient->dish_id) {
                self::$dishId = $ingredient->dish_id;
                self::$step = 1;
            }
        });
    }
}
