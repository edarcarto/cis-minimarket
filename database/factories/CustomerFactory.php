<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'document_type' => $faker->randomDigitNotNull,
        'document_number' => $faker->word,
        'phone' => $faker->word,
        'departament' => $faker->randomDigitNotNull,
        'province' => $faker->randomDigitNotNull,
        'district' => $faker->randomDigitNotNull,
        'address' => $faker->word,
        'number' => $faker->word,
        'legal' => $faker->randomDigitNotNull,
        'tyc' => $faker->randomDigitNotNull,
        'active' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
