<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'product_name' => 'Product '.$faker->randomDigit.' DMT '.$faker->word,
        'price' => (float) ( rand(500,500000) + '000'),
        'trade_mark_id'=>$faker->numberBetween($min = 1, $max = 15),
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
        'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
