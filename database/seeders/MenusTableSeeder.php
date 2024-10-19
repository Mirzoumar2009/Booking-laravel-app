<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'Caesar Salad',
            'description' => 'Fresh romaine lettuce with Caesar dressing.',
            'price' => 8.50,
            'category' => 'starter',
        ]);

        Menu::create([
            'name' => 'Grilled Chicken',
            'description' => 'Grilled chicken served with vegetables.',
            'price' => 15.00,
            'category' => 'main',
        ]);
    }
}
