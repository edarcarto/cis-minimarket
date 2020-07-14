<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'category_name' => $faker->word,
        'category_id' => 0,
        'parent'        => 1,
        'active'        => 1,
        'created_at'    => $faker->date('Y-m-d H:i:s'),
        'updated_at'    => $faker->date('Y-m-d H:i:s')
    ];
});
