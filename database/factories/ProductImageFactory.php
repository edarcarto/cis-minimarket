<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductImage;
use App\Models\Product;
use Faker\Generator as Faker;

$productId = factory(Product::class);

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f091772f18d8.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431352/products/5f091772f18d8.jpg',
        'product_id' => $productId,
        'asset_id' => '5f091772f18d8'
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f09177c208b0.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431356/products/5f09177c208b0.jpg',
        'product_id' => $productId,
        'asset_id' => '5f09177c208b0'
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f09178613b51.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431366/products/5f09178613b51.jpg',
        'product_id' => $productId,
        'asset_id' => '5f09178613b51'
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f09178b8e14c.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431372/products/5f09178b8e14c.jpg',
        'product_id' => $productId,
        'asset_id' => '5f09178b8e14c'
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f0917906781e.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431377/products/5f0917906781e.jpg',
        'product_id' => $productId,
        'asset_id' => '5f0917906781e'
    ];
});

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'public_id' => 'products/5f09179465763.jpg',
        'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431381/products/5f09179465763.jpg',
        'product_id' => $productId,
        'asset_id' => '5f09179465763'
    ];
});