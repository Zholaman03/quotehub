<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // міндетті түрде хешпен!
            'role_id' => 1, // егер ролімен байланыстырсаң
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user_test@example.com',
            'password' => Hash::make('user123'),
            'role_id' => 2, // мысалы: 2 = user
        ]);
    }
}
