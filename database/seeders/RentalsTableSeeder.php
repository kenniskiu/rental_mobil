<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;
use Illuminate\Support\Carbon;


class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Rental::create([
            'date_rented' => Carbon::now()->subDays(10),
            'date_returned' => Carbon::now()->subDays(1),
            'car_id' => 1,  // Replace with the actual car ID
            'renter_id' => 2,
        ]);
    }
}
