<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trademark;
use Faker\Generator as Faker;

$factory->define(Trademark::class, function (Faker $faker) {

    return [
        'trade_name' => $faker->word,
        'active' => '1',
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
