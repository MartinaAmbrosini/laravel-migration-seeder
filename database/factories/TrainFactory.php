<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake()->sentence(2),
            'departure_station' => fake()->sentence(2, true),
            'arrival_station' => fake()->sentence(2),
            'departure_time' => fake()->dateTimeBetween('now', '+3 days'),
            'arrival_time' => fake()->dateTime(),
            'train_code' => fake()->unique()->randomNumber(6, true),
            'carriages_number' => fake()->randomNumber(1, 10),
            'in_time' => fake()->boolean(),
            'deleted' => fake()->boolean(),
        ];
    }
}
