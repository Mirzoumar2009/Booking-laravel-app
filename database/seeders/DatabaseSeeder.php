<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UsersTableSeeder::class,
            TablesTableSeeder::class,
            CabinsTableSeeder::class,
            BookingsTableSeeder::class,
            MenusTableSeeder::class,
            ReviewsTableSeeder::class,
            PhotosTableSeeder::class,
            PromotionsTableSeeder::class,
            CategoriesTableSeeder::class,
            MenuCategoryTableSeeder::class,
            SettingsTableSeeder::class,
        ]);
    }
}
