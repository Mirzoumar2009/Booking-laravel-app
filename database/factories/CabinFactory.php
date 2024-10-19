<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cabin>
 */
class CabinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Случайное слово для имени кабины
            'capacity' => $this->faker->numberBetween(1, 20), // Случайная вместимость от 1 до 20
            'type' => $this->faker->randomElement(['standard', 'vip']), // Случайный тип кабины
            'price' => $this->faker->randomFloat(2, 50, 1000), // Случайная цена от 50 до 1000
            'amenities' => $this->faker->sentence(), // Случайное предложение для удобств
            'status' => $this->faker->randomElement(['available', 'reserved']), // Случайный статус
        ];
    }
}
