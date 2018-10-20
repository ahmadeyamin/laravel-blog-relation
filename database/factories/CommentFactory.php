<?php

use Faker\Generator as Faker;

$factory->define(App\Sys\Comment::class, function (Faker $faker) {
    return [
        'author_id' => 2,
        'post_id' => 2,
        'body'    => $faker->sentence,
    ];
});
