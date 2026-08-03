<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@chl.com'
            ],
            [
                'nom' => 'Admin',
                'prenom' => 'CHL',
                'password' => Hash::make('Admin1234'),
                'role' => 'admin',
                'actif' => 1,
            ]
        );
    }
}