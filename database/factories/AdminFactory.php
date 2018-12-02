<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    $date = \Carbon\Carbon::now();
    $password = Hash::make('admin');
    return [
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => $password,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
