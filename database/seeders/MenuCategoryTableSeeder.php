<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuCategory;

class MenuCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuCategory::create(['menu_id' => 1, 'category_id' => 1]);
        MenuCategory::create(['menu_id' => 2, 'category_id' => 2]);
    }
}
