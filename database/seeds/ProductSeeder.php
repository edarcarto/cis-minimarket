<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;
use App\Models\ProductImage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Product::create([
            'product_name' => 'Coca Cola',
            'description'  => 'Agua carbonatada, Colorante 150d, Aromatizantes, Acidulante: Edulcorantes: Aspartamo (24mg%) - Acesulfame K (16mg%), Conservante: Benzoato de sodio, Regulador de acidez. CONTIENE CAFEÍNA. FENILCETONÚRICOS: CONTIENE FENILALANINA.',
            'quantity_per_unit' => 100,
            'unit_price' => 2.60,
            'units_in_stock' => 100,
            'units_on_order' => 0,
            'reorder_level' => 0,
            'supplier_id' => 1,
            'category_id' => 1,
            'trademark_id' => 1,
            'discontinued' => 0,
            'active' => 1
        ]);

        for ($i=0; $i < 49; $i++) { 
            $p = Product::create([
                'product_name' => 'Producto #'.($i + 1),
                'description'  => $faker->text,
                'quantity_per_unit' => 100,
                'unit_price' => $faker->randomNumber(2),
                'units_in_stock' => 100,
                'units_on_order' => 0,
                'reorder_level' => 0,
                'supplier_id' => 1,
                'category_id' => 1,
                'trademark_id' => 1,
                'discontinued' => 0,
                'active' => 1
            ]);
            ProductImage::insert([
                [
                    'public_id' => 'products/5f206ed3302b2.jpg',
                    'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431352/products/5f206ed3302b2.jpg',
                    'product_id' => $p->id,
                    'asset_id' => '5f206ed3302b2'
                ],
                [
                    'public_id' => 'products/5f206ed3302b2.jpg',
                    'url' => 'https://res.cloudinary.com/eecc/image/upload/v1594431356/products/5f206ed3302b2.jpg',
                    'product_id' => $p->id,
                    'asset_id' => '5f206ed3302b2'
                ],
            ]);
        }
    }
}
