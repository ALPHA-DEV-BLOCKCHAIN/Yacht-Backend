<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('packages')->insert([
            [
                'name' => 'Basic Package',
                'description' => 'Includes basic features and amenities for a short stay.',
                'price' => 299.99,
            ],
            [
                'name' => 'Deluxe Package',
                'description' => 'Features additional amenities and extended stay options.',
                'price' => 599.99,
            ],
            [
                'name' => 'Premium Package',
                'description' => 'All-inclusive package with premium features and VIP services.',
                'price' => 999.99,
            ],
            [
                'name' => 'Adventure Package',
                'description' => 'For those seeking thrills, includes adventure sports and guided tours.',
                'price' => 1299.99,
            ],
            [
                'name' => 'Family Package',
                'description' => 'Designed for families with special activities and accommodations for children.',
                'price' => 799.99,
            ],
        ]);
    }
}
