<?php

use Illuminate\Database\Seeder;
// use Seeder\CategorySeeder;
// use Seeder\TrademarkSeeder;
// use Seeder\SupplierSeeder;
// use Seeder\ProductSeeder;
// use Seeder\ProductImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     CategorySeeder::class,
        //     TrademarkSeeder::class,
        //     SupplierSeeder::class,
        //     ProductSeeder::class,
        //     ProductImageSeeder::class
        // ]);
        $this->call(CategorySeeder::class);
    }
}
