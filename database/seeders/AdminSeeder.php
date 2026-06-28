<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // import class Hash dari Laravel yang mengubah pw menjadi string random (one way hasing)

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sakanca.com'],
            [
                'name' => 'admin Sakanca',
                'email' => 'admin@sakanca.com',
                'password' => Hash::make('bismillah2025_.'),
            ]
        );
    }
}
