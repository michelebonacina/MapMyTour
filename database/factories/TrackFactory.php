<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Track;
use App\TrackSegment;
use Faker\Generator as Faker;

$factory->define(Track::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'user_id' => 2
    ];
});

$factory->define(TrackSegment::class, function (Faker $faker) {
    return [
        'name' => $faker->text(16),
        'track_id' => 1
    ];
});
