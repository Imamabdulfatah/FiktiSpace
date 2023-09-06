<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween($int1 = 1, $int2 = 15),
            'category_id' => fake()->numberBetween($int1 = 1, $int2 = 6),
            'username' => fake()->unique()->name(),
            'ketua' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'anggota' => fake()->name(7),
            'region' => fake()->city(),
        ];
    }
}
