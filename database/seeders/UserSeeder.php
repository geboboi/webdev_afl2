<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Willas Tobing",
            'email' => 'willas@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('696969'),
            'role_id' => 1,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => "Gabriela",
            'email' => 'gabriela@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10),
        ]);
        
    }
}
