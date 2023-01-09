<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->randomElement(['fanatasy', 'space', 'earth']),
            'paragraph1' => $this->faker->paragraph,
            'paragraph2' => $this->faker->paragraph,
            'paragraph3' => $this->faker->paragraph,
            'origin' => $this->faker->sentence,
        ];
    }
}
