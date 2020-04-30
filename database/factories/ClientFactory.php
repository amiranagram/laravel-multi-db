<?php

/** @var Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Client::class, function (Faker $faker) {
    $firstName = $faker->firstName;

    return [
        'name' => $firstName . ' ' . $faker->lastName,
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => Str::lower($firstName),
    ];
});
