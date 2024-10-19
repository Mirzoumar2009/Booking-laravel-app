<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Starters']);
        Category::create(['name' => 'Main Courses']);
        Category::create(['name' => 'Desserts']);
        Category::create(['name' => 'Beverages']);
    }
}