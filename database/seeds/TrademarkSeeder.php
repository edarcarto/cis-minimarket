<?php

use Illuminate\Database\Seeder;
use App\Models\Trademark;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Trademark::class, 1)->make();
    }
}
