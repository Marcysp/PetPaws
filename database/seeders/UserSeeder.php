<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => bcrypt('password'),
            'is_admin' =>true
        ]);

        User::create([
            'email' => 'user@gmail.com',
            'name' => 'user',
            'password' => bcrypt('user12345'),
            'is_admin' =>false
        ]);
    }
}
