<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'mico',
            'full_name' => 'Mico F. Larracas',
            'email' => 'mflarracas@fit.edu.ph',
        ]);
    }
}