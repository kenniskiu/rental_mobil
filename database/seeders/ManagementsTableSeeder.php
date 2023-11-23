<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Management;

class ManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Management::create([
            'brand' => 'Example Brand 1',
            'plate' => 'ABC123',
            'model' => 'test',
            'cost' => 100.00,
            'user_id' => 2,
        ]);
    }
}
