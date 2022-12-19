<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'    =>  fake()->name(),
            'qrup_id'=>fake()->numberBetween(0,50),
            'muellim_id'=>fake()->numberBetween(0,50)

        ];
    }
}
