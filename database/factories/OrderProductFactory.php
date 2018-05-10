<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\OrderProduct::class, function (Faker $faker) {
    return [
        'product_id' => rand(1,30),
        'qty' => rand(1, 5),
        'discount' =>rand(5, 20),
    ];
});
