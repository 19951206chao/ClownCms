<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    $updated_at = $faker->dateTimeThisYear();

    $created_at = $faker->dateTimeThisYear($updated_at);

    return [
        'amount'=>random_int(1,10),
        'created_at'=>$created_at,
        'updated_at'=>$updated_at,
    ];
});
