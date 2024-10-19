<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'user_id' => 1,
            'table_id' => 1,
            'cabin_id' => null,
            'booking_time' => now()->addHours(2),
            'number_of_people' => 2,
            'status' => 'confirmed',
            'booking_type' => 'in_restaurant',
        ]);

        Booking::create([
            'user_id' => 2,
            'table_id' => null,
            'cabin_id' => 1,
            'booking_time' => now()->addDays(1),
            'number_of_people' => 4,
            'status' => 'pending',
            'booking_type' => 'home',
        ]);
    }
}
