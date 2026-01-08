<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class OldStudentFactory extends Factory
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
            'grade' => fake()->randomElement(['11 pplg 2', '10 pplg 3']),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'birthday' => fake()->date(),
            'gender' => fake()->randomElement(['Male', 'Female'])
        ];
    }
}
