<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kibaha;
use Faker\Generator as Faker;

$factory->define(Kibaha::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->randomElement(['Ruvu', 'Soga', 'Tumbi', 'Mlandizi', 'Visiga']),
        'metre_no' => $faker->unique()->numberBetween($min = 1, $max = 9000000),
        'gender' => $faker->randomElement(['male', 'female']),
        'start' => $faker->date(),
        'status' => $faker->randomElement(['paid', 'notpaid']),
    ];
});
