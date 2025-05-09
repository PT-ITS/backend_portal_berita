<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::create(2024, 10, 10, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'password' => Hash::make('12345'),
            'created_at' => Carbon::create(2024, 10, 10, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 10, 10, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
    }
}
