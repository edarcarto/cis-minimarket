<?php

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'company_name' => 'Coca Cola',
            'contact_name' => 'Jhon Doe',
            'contact_title' => 'Marketing',
            'address' => 'Lima #1542',
            'departament' => 'Lima',
            'province' => 'Lima',
            'district' => '12345',
            // 'country' => 'Perú',
            'phone' => '999999999',
            // 'fax' => '999999',
            'homepage' => 'https://www.cocacolalatinamerica.com/pe/es/home'
        ]);
    }
}
