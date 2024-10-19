<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(['key' => 'restaurant_name', 'value' => 'My Awesome Restaurant']);
        Setting::create(['key' => 'max_booking_limit', 'value' => '10']);
    }
}
