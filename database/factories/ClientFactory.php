<?php

/** @var Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
    ];
});
