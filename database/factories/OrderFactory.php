<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        'customer_name'=>$faker->name,
        'customer_address'=>$faker->address,
        'customer_phone'=>$faker->phoneNumber,
        'customer_email'=>$faker->unique()->safeEmail,
        'billing_discount'=>$faker->numberBetween($min = 5 , $max =20),
        'billing_discount_code'=>$faker->word,
        'billing_subtotal'=>450000,
        'billing_tax'=>10,
        'billing_total'=> 500000,
        'payment_method'=>rand(1,3)
    ];
});
