<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Korpus>
 */
class KorpusFactory extends Factory
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
            'title'    =>  fake()->text(),
            'desc'   =>  fake()->text(2000),
            'img'    =>  fake()->ImageUrl(),
        ];
    }
}
