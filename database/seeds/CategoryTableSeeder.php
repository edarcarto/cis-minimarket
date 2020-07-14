<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'category_name' => 'Cervezas, Vinos y Bebidas',
                'category_id' => 0,
                'parent'        => 1,
                'active'        => 1
            ],
            [
                'category_name' => 'Gaseosas Personales',
                'category_id' => 1,
                'parent'        => 1,
                'active'        => 1
            ],
            [
                'category_name' => 'Gaseosas',
                'category_id' => 2,
                'parent'        => 0,
                'active'        => 1
            ]
        ]);
    }
}
