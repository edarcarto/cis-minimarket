<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
