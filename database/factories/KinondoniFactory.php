<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kinondoni;
use Faker\Generator as Faker;

$factory->define(App\Kinondoni::class, function($faker) {
    return [
    'name' => $faker->name,
    'street' => $faker->randomElement(['Kinondoni', 'Mwananyamala', 'Kijitonyama', 'Mikocheni', 'Makumbusho']),
    'metre_no' => $faker->unique()->numberBetween($min = 1, $max = 9000000),
    'gender' => $faker->randomElement(['male', 'female']),
    'start' => $faker->date(),
    'status' => $faker->randomElement(['paid', 'notpaid']),
    ];
    });
