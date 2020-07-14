<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'product_name' => $faker->word,
        'description'  => $faker->word,
        'quantity_per_unit' => 100,
        'unit_price' => 2.60,
        'units_in_stock' => 100,
        'units_on_order' => 0,
        'reorder_level' => 0,
        'supplier_id' => 1,
        'category_id' => 1,
        'trademark_id' => 1,
        'active' => 1,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
