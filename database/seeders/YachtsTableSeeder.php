<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YachtsTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('yachts')->insert([
            [
                'name' => 'Luxury Yacht',
                'description' => 'A luxurious yacht with all amenities.',
                'price' => 500000.00,
                'status' => 'for_sale',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ocean Explorer',
                'description' => 'Perfect for long voyages with a robust build and ample storage.',
                'price' => 150000.00,
                'status' => 'for_rent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sunset Cruiser',
                'description' => 'Ideal for day trips with comfortable seating and excellent performance.',
                'price' => 800000.00,
                'status' => 'sold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Speed Boat',
                'description' => 'A fast speed boat for racing.',
                'price' => 150000.00,
                'status' => 'for_sale',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ]);
    }
}
