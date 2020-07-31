<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creación de usuario
        $user = User::create([
            'name' => 'Felicity Huaranca',
            'email' => 'felihuarancca@gmail.com',
            'password' => Hash::make('felihuarancca'),
            'type_user_id' => 3
        ]);

        Customer::create([
            'first_name'        => 'Felicity',
            'last_name'         => 'Huaranca',
            'document_type'     => 2,
            'document_number'   => '99999999',
            'phone'             => '999999999',
            'departament'       => 0,
            'province'          => 0,
            'district'          => 0,
            'address'           => 'Av Ejemplo',
            'number'            => '',
            'legal'             => 1,
            'tyc'               => 1,
            'active'            => 1,
            'user_id'           => $user->id
        ]);

        $user = User::create([
            'name' => 'Felicity Huaranca',
            'email' => 'felihuarancca2@gmail.com',
            'password' => Hash::make('felihuarancca'),
            'type_user_id' => 3
        ]);

        Customer::create([
            'first_name'        => 'Felicity',
            'last_name'         => 'Huaranca',
            'document_type'     => 2,
            'document_number'   => '99999999',
            'phone'             => '999999999',
            'departament'       => 0,
            'province'          => 0,
            'district'          => 0,
            'address'           => 'Av Ejemplo',
            'number'            => '',
            'legal'             => 1,
            'tyc'               => 1,
            'active'            => 1,
            'user_id'           => $user->id
        ]);

        // creación de usuario
        $user = User::create([
            'name' => 'Efren Carrillo',
            'email' => 'edarcarto@gmail.com',
            'password' => Hash::make('Lima2020.'),
            'type_user_id' => 1
        ]);

        Customer::create([
            'first_name'        => 'Efren',
            'last_name'         => 'Carrillo',
            'document_type'     => 2,
            'document_number'   => '99999999',
            'phone'             => '999999999',
            'departament'       => 0,
            'province'          => 0,
            'district'          => 0,
            'address'           => 'Av Ejemplo',
            'number'            => '',
            'legal'             => 1,
            'tyc'               => 1,
            'active'            => 1,
            'user_id'           => $user->id
        ]);
    }
}
