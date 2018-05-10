<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ProductDetail::class, function (Faker $faker) {
    return [
        'energy' => $faker->numberBetween($min = 0, $max = 1),
        'diameter' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5),
        'waterproof'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2),
        'case' => $faker->numberBetween($min = 0, $max = 6),
        'watch_chain' => $faker->numberBetween($min = 0, $max = 7),
        'guarantee' => $faker->numberBetween($min = 5, $max = 10),
        'total_qty'=>$faker->numberBetween($min = 50, $max = 200),
        'glass'=>$faker->word,
        'image'=> json_encode(['/images/home/girl1.jpg','/images/home/girl2.jpg','/images/home/girl3.jpg'])
    ];
});
