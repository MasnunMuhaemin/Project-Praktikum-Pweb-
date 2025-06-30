<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'alamat' => 'Jl. Contoh No. 123',
            'no_hp' => '081234567890',
            'password' => Hash::make('password'), 
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'alamat' => 'Jl. Pemakai Laravel',
            'no_hp' => '089998887777',
            'password' => Hash::make('password'),
        ]);
    }
}
