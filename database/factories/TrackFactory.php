<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Track;
use Faker\Generator as Faker;

$factory->define(Track::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'user_id' => 2
    ];
});
