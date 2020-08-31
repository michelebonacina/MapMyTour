<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Waypoint;
use Faker\Generator as Faker;

$factory->define(Waypoint::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'altitude' => $faker->numberBetween(0,2000)
    ];
});
