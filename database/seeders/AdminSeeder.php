<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(

            ['email' => 'admin@chl.mg'],

            [

                'nom' => 'ADMIN',

                'prenom' => 'CHL',

                'email' => 'admin@chl.mg',

                'telephone' => '0340000000',

                'password' => Hash::make('Admin@123'),

                'role' => 'admin',

                'actif' => true,

            ]

        );
    }
}