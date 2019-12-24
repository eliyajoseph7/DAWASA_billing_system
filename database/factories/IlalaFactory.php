<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ilala;
use Faker\Generator as Faker;

$factory->define(Ilala::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'street' => $faker->randomElement(['Gerezani', 'Tabata', 'Kariakoo', 'Magomeni', 'Buguruni']),
        'metre_no' => $faker->unique()->numberBetween($min = 1, $max = 9000000),
        'gender' => $faker->randomElement(['male', 'female']),
        'start' => $faker->date(),
        'status' => $faker->randomElement(['paid', 'notpaid']),
    ];
});
