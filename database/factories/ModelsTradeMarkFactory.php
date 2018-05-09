<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TradeMark::class, function (Faker $faker) {
    return [
        'trademark_name' => 'Đồng hồ '.$faker->company,
        'description' => $faker->text
    ];
});
