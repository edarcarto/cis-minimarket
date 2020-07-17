<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shipper;
use Faker\Generator as Faker;

$factory->define(Shipper::class, function (Faker $faker) {

    return [
        'address' => $faker->word,
        '[A[Bphone' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
