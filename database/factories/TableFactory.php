<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seats' => $this->faker->numberBetween(2, 10), // Случайное количество мест от 2 до 10
            'status' => $this->faker->randomElement(['available', 'reserved']), // Случайный статус
        ];
    }
}
