<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        'text'          => $faker->text(50),
        'amount'        => $faker->numberBetween(1),
        'current_views' => $faker->randomDigit,
        'price'         => $faker->randomFloat(),
        'banner'        => $faker->imageUrl()
    ];
});
