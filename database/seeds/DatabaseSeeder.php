<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
            CategoryTableSeeder::class,
            TrademarkSeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class
        ]);
        Model::reguard();
    }
}
