<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'product_id' => function() {
            return factory('App\Product')->create()->id;
        },
        'body' => $faker->paragraph(6, true),
        'ratings' => $faker->randomFloat(1, 0, 5),
    ];
});
