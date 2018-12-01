<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    $date = \Carbon\Carbon::now();
    return [
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => encrypt('admin'),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
