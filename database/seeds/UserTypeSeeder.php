<?php

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::insert([
            [
                'type_name' => 'Administrador',
                'active'        => 1
            ],
            [
                'type_name' => 'Delivery',
                'active'        => 1
            ],
            [
                'type_name' => 'Cliente',
                'active'        => 1
            ]
        ]);
    }
}
