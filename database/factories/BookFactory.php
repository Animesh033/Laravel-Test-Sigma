<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category' => $faker->numberBetween(1,10),
        'quantity' => $faker->numberBetween(1,100)
    ];
});