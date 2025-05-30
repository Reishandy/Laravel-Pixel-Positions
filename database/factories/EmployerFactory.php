<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Predetermined country to make the salaries currency values work
        $countryCodes = ['US', 'EU', 'GB', 'CA', 'AU'];

        return [
            'user_id' => User::factory(),
            'name' => fake()->company(),
            'logo' => 'https://picsum.photos/seed/'.rand(1000, 9999).'/100',
            'country_code' => fake()->randomElement($countryCodes)
        ];
    }
}
