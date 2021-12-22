<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        \App\Models\User::create([
            'id' => Str::uuid(),
            'name' => 'System Admin',
            'email' => 'systemadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol' => 'AdminSystem',
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::create([
            'id' => Str::uuid(),
            'name' => 'Dr. Luis Argüello',
            'email' => 'dradmin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'rol' => 'Médico',
            'remember_token' => Str::random(10),
        ]);
    }
}
