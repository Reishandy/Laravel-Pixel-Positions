<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $techJobTitles = [
        'Software Engineer', 'Full Stack Developer', 'Frontend Developer',
        'Backend Developer', 'DevOps Engineer', 'Site Reliability Engineer',
        'Mobile Developer', 'iOS Developer', 'Android Developer',
        'Data Scientist', 'Machine Learning Engineer', 'UI/UX Designer',
        'QA Engineer', 'Test Automation Engineer', 'Product Manager',
        'Scrum Master', 'Technical Lead', 'Engineering Manager',
        'Cloud Architect', 'Security Engineer', 'Database Administrator',
        'Systems Architect', 'Network Engineer', 'Blockchain Developer',
        'API Developer', 'Solutions Architect', 'JavaScript Developer',
        'PHP Developer', 'Python Developer', 'Java Developer', 'Ruby Developer'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory()->create(),
            'title' => $this->faker->randomElement($this->techJobTitles),
            'salary' => round(rand(30000, 200000) / 5000) * 5000,
            'location' => fake()->randomElement(['Remote', 'Office', 'Hybrid']),
            'url' => fake()->url(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'featured' => fake()->boolean(30)
        ];
    }
}
