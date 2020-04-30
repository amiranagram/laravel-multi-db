<?php

/** @var Factory $factory */


use App\SlaveModels\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
    ];
});
