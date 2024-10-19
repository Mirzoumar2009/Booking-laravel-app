<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'user_id' => 1,
            'rating' => 5,
            'comment' => 'Excellent service and delicious food!',
        ]);

        Review::create([
            'user_id' => 2,
            'rating' => 4,
            'comment' => 'Great atmosphere but a bit expensive.',
        ]);
    }
}
