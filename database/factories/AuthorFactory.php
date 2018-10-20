<?php

use Faker\Generator as Faker;

$factory->define(App\Sys\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->city,
        'description' => $faker->sentence,
    ];
});
