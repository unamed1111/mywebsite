<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'customer_name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'dob'=>$faker->date,
        'password' => bcrypt('123456'),
        'gender'=> 1,
        'address' => $faker->address,
        'phone'=>$faker->phoneNumber
    ];
});
