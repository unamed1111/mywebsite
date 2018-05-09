<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TradeMarkCategory::class, function (Faker $faker) {
    return [
        'trademark_id' => $faker->numberBetween($min = 1, $max = 15),
        'category_id' => $faker->numberBetween($min = 1, $max = 4)
    ];
});
