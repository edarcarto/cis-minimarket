<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {

    return [
        'company_name' => $faker->word,
        'contact_name' => $faker->word,
        'contact_title' => $faker->word,
        'address' => $faker->word,
        'city' => $faker->word,
        'region' => $faker->word,
        'postal_code' => $faker->word,
        'country' => $faker->word,
        'phone' => $faker->word,
        'fax' => $faker->word,
        'homepage' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
