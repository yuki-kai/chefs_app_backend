<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = Dish::all();
        foreach($dishes as $key => $dish) {
            $randomCount = rand(3, 10);
            Recipe::factory($randomCount)->create(["dish_id" => $dish->id]);
        }
    }
}
