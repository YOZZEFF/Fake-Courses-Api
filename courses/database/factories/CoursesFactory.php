<?php

namespace Database\Factories;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 'title','price','description','instructor_id'

        return [
            //
            'title' => fake()->name(),
            'price' => fake()->numberBetween(200, 1000),
            'description' => fake()->text(300),
            'instructor_id' => fake()->numberBetween(1, 10)

        ];
    }
}
