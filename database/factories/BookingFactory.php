<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UserFactory::factory(), // Создание пользователя
            'table_id' => TableFactory::factory()->nullable(), // Создание стола, если он указан
            'cabin_id' => CabinFactory::factory()->nullable(), // Создание кабины, если она указана
            'booking_time' => $this->faker->dateTimeBetween('now', '+1 year'), // Случайное время бронирования
            'number_of_people' => $this->faker->numberBetween(1, 10), // Случайное количество людей
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']), // Случайный статус
            'booking_type' => $this->faker->randomElement(['home', 'in_restaurant']), // Случайный тип бронирования
        ];
    }
}
