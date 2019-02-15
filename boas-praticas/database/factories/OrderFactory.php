<?php

use Faker\Generator as Faker;
use App\Models\Order;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['pending', 'delivered', 'cancel']),
        'paid' => $faker->boolean(50),
        'track_code' => md5(uniqid(rand(), true))
    ];
});
