<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quality;
use Faker\Generator as Faker;

$factory->define(Quality::class, function (Faker $faker) {
    return [
        'day' => $faker->date("l"),
        'PH' => $faker->numberBetween($min = 60, $max = 120)/10,
    ];
});
