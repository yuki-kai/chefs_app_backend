<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\Ingredient;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    private static int $dishId = 0;
    private static int $order = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => app()->make(Generator::class)->ingredientName(),
            "amount" => fake()->randomElement(["大さじ", "小さじ"]) . rand(1, 5) . "杯",
            "order" => self::$order++,
            "dish_id" => Dish::factory(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Ingredient $ingredient) {
            if (self::$dishId !== $ingredient->dish_id) {
                self::$dishId = $ingredient->dish_id;
                self::$order = 1;
            }
        });
    }
}
