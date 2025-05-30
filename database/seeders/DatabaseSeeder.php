<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Testing account
        User::factory()->create([
            'name' => 'Rei',
            'email' => 'rei@example.com',
            'password' => '12345678'
        ]);

        $tags = Tag::factory(25)->create();

        // Create a job for the test user and assign random tags
        $job = Job::factory()->create(['employer_id' => Employer::factory()->create(['user_id' => 1])]);
        $job->tags()->attach($tags->random(3));

        // Random population
        Job::factory(10)->create()->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(rand(1, 5)));
        });
    }
}
