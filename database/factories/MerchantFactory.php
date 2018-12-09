<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Merchant::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
    ];
});
