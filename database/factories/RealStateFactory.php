<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RealState>
 */
class RealStateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'real_state_type' => fake()->randomElement(['house', 'department', 'land', 'commercial_ground']),
            'street' => fake()->address(),
            'external_number' => fake()->numberBetween(1,10),
            'internal_number' => fake()->numberBetween(1,10),
            'neighborhood' => fake()->name(),
            'city' => fake()->city(),
            'country' => fake()->countryCode(),
            'rooms' => fake()->numberBetween(1,10),
            'bathrooms' => fake()->randomFloat($maxDecimals = 1, $min = 0, $max = 10),
            'comments' => fake()->paragraph(1)
        ];
    }
}
