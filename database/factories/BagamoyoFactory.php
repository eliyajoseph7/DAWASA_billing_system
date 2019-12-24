<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bagamoyo;
use Faker\Generator as Faker;

$factory->define(Bagamoyo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->randomElement(['Lugoba', 'Chalinze', 'Chasimba', 'Dunda', 'Kibindu']),
        'metre_no' => $faker->unique()->numberBetween($min = 1, $max = 9000000),
        'gender' => $faker->randomElement(['male', 'female']),
        'start' => $faker->date(),
        'status' => $faker->randomElement(['paid', 'notpaid']),
    ];
});
