<?php

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::insert(
            [
                'public_id' => 'products/5f091772f18d8.jpg',
                'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431352/products/5f091772f18d8.jpg',
                'product_id' => 1,
                'asset_id' => '5f091772f18d8'
            ],
            [
                'public_id' => 'products/5f09177c208b0.jpg',
                'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431356/products/5f09177c208b0.jpg',
                'product_id' => 1,
                'asset_id' => '5f09177c208b0'
            ],
            [
                'public_id' => 'products/5f09178613b51.jpg',
                'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431366/products/5f09178613b51.jpg',
                'product_id' => 1,
                'asset_id' => '5f09178613b51'
            ],
            [
                'public_id' => 'products/5f09178b8e14c.jpg',
                'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431372/products/5f09178b8e14c.jpg',
                'product_id' => 1,
                'asset_id' => '5f09178b8e14c'
            ],
            [
                'public_id' => 'products/5f0917906781e.jpg',
                'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431377/products/5f0917906781e.jpg',
                'product_id' => 1,
                'asset_id' => '5f0917906781e'
            ]
        );
    }
}
