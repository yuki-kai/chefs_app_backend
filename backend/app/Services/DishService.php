<?php

namespace App\Services;

use App\Models\Dish;

class DishService
{
    public function getDishes()
    {
        $dishes = Dish::select("id", "image_path", "name", "description")->with(["ingredients" => function($query) {
            $query->select("id", "name", "dish_id")->orderBy("order", "asc");
        }])->get();

        return $dishes;
    }
}
