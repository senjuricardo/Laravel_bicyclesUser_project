<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,100),
        'brand' => $faker->city,
        'model' => $faker->state,
        'color' => $faker->colorName,
        'price' => $faker->randomFloat(2,1,500),
    ];
});
