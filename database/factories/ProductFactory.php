<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'product_name' => $faker->word,
        'quantity_per_unit' => $faker->randomDigitNotNull,
        'unit_price' => $faker->randomDigitNotNull,
        'units_in_stock' => $faker->randomDigitNotNull,
        'units_on_order' => $faker->randomDigitNotNull,
        'reorder_level' => $faker->randomDigitNotNull,
        'supplier_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'trademark_id' => $faker->randomDigitNotNull,
        'active' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
