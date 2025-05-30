<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Use limited currency to make the value more realistic
        $currencies = ['USD', 'EUR', 'GBP', 'CAD', 'AUD', 'SGD', 'HKD', 'NZD'];

        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => round(rand(30000, 200000) / 5000) * 5000,
            'currency' => fake()->randomElement($currencies),
            'location' => fake()->randomElement(['Remote', 'Office', 'Hybrid']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'featured' => fake()->boolean(40)
        ];
    }
}
