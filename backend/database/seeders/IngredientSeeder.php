<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = Dish::all();
        foreach($dishes as $key => $dish) {
            $randomCount = rand(5, 10);
            Ingredient::factory($randomCount)->create(["dish_id" => $dish->id]);
        }
    }
}
