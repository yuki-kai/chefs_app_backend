<?php

namespace App\Faker;

use Faker\Provider\Base;

class DishFaker extends Base
{
    protected static $dishName = [
        "ラーメン",
        "カレーライス",
        "ハヤシライス",
        "親子丼",
        "唐揚げ",
        "野菜炒め",
        "オムライス",
        "ナポリタン",
        "ペペロンチーノ",
        "ハンバーグ",
        "チャーハン",
        "回鍋肉",
        "八宝菜",
        "麻婆豆腐",
        "レバニラ炒め",
    ];

    protected static $ingredientName = [
        "醤油",
        "砂糖",
        "みりん",
        "料理酒",
        "コンソメ",
        "塩・胡椒",
        "玉ねぎ",
        "にんじん",
        "ピーマン",
        "キャベツ",
        "ニンニク",
        "豚肉",
        "鶏肉",
        "牛肉",
        "ひき肉",
    ];

    public function dishName()
    {
        return static::randomElement(static::$dishName);
    }

    public function ingredientName()
    {
        return static::randomElement(static::$ingredientName);
    }

}
