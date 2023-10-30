<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nome' => 'admin',
            'email' => 'admin@kbrtec.com.br',
            'password' => Hash::make(1234),
            'role' => 'Admin',
        ]);

        User::create([
            'nome' => 'user',
            'email' => 'user@kbrtec.com.br',
            'password' => Hash::make(1234),
            'role' => 'User',
        ]);

        User::create([
            'nome' => 'teste',
            'email' => 'usuario@kbrtec.com.br',
            'password' => Hash::make(1234),
            'role' => 'User',
        ]);






    }
}
