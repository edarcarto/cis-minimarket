<?php

use Illuminate\Database\Seeder;
use App\Models\Market;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Market::insert([
            [
                'market_name' => 'Tienda #1',
                'active'        => 1
            ],
            [
                'market_name' => 'Tienda #2',
                'active'        => 1
            ],
            [
                'market_name' => 'Tienda #3',
                'active'        => 1
            ]
        ]);
    }
}
