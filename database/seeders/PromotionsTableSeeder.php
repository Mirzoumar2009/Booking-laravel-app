<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            'name' => 'Happy Hour',
            'description' => '20% off on drinks from 5 PM to 7 PM.',
            'discount' => 20.00,
            'status' => 'active',
        ]);

        Promotion::create([
            'name' => 'Weekend Special',
            'description' => 'Buy one get one free on all appetizers.',
            'discount' => 50.00,
            'status' => 'active',
        ]);
    }
}
