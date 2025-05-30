<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    protected $jobTags = [
        'PHP', 'Laravel', 'JavaScript', 'React', 'Vue.js', 'Angular',
        'Python', 'Django', 'Node.js', 'TypeScript', 'AWS', 'Docker',
        'DevOps', 'CI/CD', 'Frontend', 'Backend', 'Full Stack', 'Mobile',
        'iOS', 'Android', 'SQL', 'NoSQL', 'MongoDB', 'PostgreSQL',
        'MySQL', 'Redis', 'Git', 'Agile', 'Scrum', 'Remote', 'Kubernetes',
        'Cloud', 'API', 'Microservices', 'Testing', 'UI/UX', 'GraphQL',
        'REST', 'Security', 'Analytics', 'Machine Learning', 'AI',
        'Blockchain', 'Java', 'C#', '.NET', 'Go', 'Ruby', 'Rails'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->jobTags)
        ];
    }
}
