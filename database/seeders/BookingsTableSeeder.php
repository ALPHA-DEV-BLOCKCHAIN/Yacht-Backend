<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bookings')->insert([
            [
                'user_id' => 1, // Make sure these IDs exist in your users table
                'yacht_id' => 17, // Make sure these IDs exist in your yachts table
                'start_date' => '2024-09-01',
                'end_date' => '2024-09-07',
            ],
            [
                'user_id' => 2,
                'yacht_id' => 18,
                'start_date' => '2024-09-10',
                'end_date' => '2024-09-15',
            ],
            [
                'user_id' => 3,
                'yacht_id' => 19,
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-10',
            ],
            [
                'user_id' => 1,
                'yacht_id' => 17,
                'start_date' => '2024-11-01',
                'end_date' => '2024-11-05',
            ],
            [
                'user_id' => 2,
                'yacht_id' => 17,
                'start_date' => '2024-12-01',
                'end_date' => '2024-12-10',
            ],
        ]);
    }
}
