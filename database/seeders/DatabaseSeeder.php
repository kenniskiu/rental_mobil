<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Kenniskiu',
            'email' => 'kenniskiu@carrental.com',
            'address' => 'Yogyakarta',
            'phone_number' => '083878134981',
            'sim' => '123123232133',
            'password'=>bcrypt('12345')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'penjualmobil',
            'email' => 'penjualmobil@carrental.com',
            'address' => 'Yogyakarta',
            'phone_number' => '083878134981',
            'sim' => '123123232133',
            'password'=>bcrypt('12345')
        ]);
        $this->call([
            ManagementsTableSeeder::class,
            RentalsTableSeeder::class,
        ]);
    }
}
