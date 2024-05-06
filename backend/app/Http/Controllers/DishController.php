<?php

namespace App\Http\Controllers;

use App\Services\DishService;
use Illuminate\Http\Request;

class DishController extends Controller
{
    private $dishService;

    public function __construct(DishService $dishService)
    {
        $this->dishService = $dishService;
    }

    public function getDishes()
    {
        $dishes = $this->dishService->getDishes();

        return response()->json([
            'data' => $dishes
        ], 200);
    }
}
