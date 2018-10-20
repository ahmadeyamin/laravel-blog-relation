<?php

use Faker\Generator as Faker;

$factory->define(App\Sys\Tag::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->word,
        'slug' => str_slug($name),
    ];
});
