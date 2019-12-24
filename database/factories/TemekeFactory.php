<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Temeke;
use Faker\Generator as Faker;

$factory->define(Temeke::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->randomElement(["Chang'ombe", 'Mbagala', 'Temeke', 'Mtoni', 'Keko']),
        'metre_no' => $faker->unique()->numberBetween($min = 1, $max = 9000000),
        'gender' => $faker->randomElement(['male', 'female']),
        'start' => $faker->date(),
        'status' => $faker->randomElement(['paid', 'notpaid']),
    ];
});
