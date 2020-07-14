<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {

    return [
        'company_name' => $faker->company,
        'contact_name' => $faker->name,
        'contact_title' => $faker->jobTitle,
        'address' => $faker->address,
        'city' => $faker->city,
        'region' => $faker->citySuffix,
        'postal_code' => $faker->postcode,
        'country' => $faker->country,
        'phone' => $faker->mobileNumber,
        'fax' => $faker->faxNumber,
        'homepage' => $faker->url,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
