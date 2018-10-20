<?php

use Faker\Generator as Faker;

$factory->define(App\Sys\Category::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->name,
        'slug' => str_slug($name),
        'desc' => $faker->sentence,
    ];
});
