<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabin;


class CabinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cabin::create([
            'name' => 'Standard Cabin 1',
            'capacity' => 4,
            'type' => 'standard',
            'price' => 100.00,
            'amenities' => 'Table, Chairs, Air Conditioning',
            'status' => 'available',
        ]);

        Cabin::create([
            'name' => 'VIP Cabin 1',
            'capacity' => 6,
            'type' => 'vip',
            'price' => 250.00,
            'amenities' => 'Table, Luxury Chairs, Air Conditioning, TV',
            'status' => 'available',
        ]);
    }
}
