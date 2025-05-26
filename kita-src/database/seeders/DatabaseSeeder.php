<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Address::factory()->create([
            'barangay' => 'test brgy',
            'city' => 'test city',
            'province' => 'test province',
            'region' => 'test region',
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'addressId' => 3423,
        ]);
    }
}
