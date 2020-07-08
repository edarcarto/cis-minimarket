<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

    return [
        'customer_id' => $faker->randomDigitNotNull,
        'order_date' => $faker->date('Y-m-d H:i:s'),
        'required_date' => $faker->date('Y-m-d H:i:s'),
        'shipped_date' => $faker->date('Y-m-d H:i:s'),
        'ship_via' => $faker->randomDigitNotNull,
        'freight' => $faker->randomDigitNotNull,
        'ship_name' => $faker->word,
        'ship_address' => $faker->word,
        'ship_city' => $faker->word,
        'ship_region' => $faker->word,
        'ship_postal_code' => $faker->word,
        'ship_country' => $faker->word,
        'active' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
