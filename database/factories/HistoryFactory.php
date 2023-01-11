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
            'title' => $this->faker->word,
            'category' => $this->faker->randomElement(['fantasy', 'space', 'earth']),
            'paragraph1' => $this->faker->paragraph,
            'paragraph2' => $this->faker->paragraph,
            'paragraph3' => $this->faker->paragraph,
            'image' => $this->faker->randomElement(['logo.png', 'colored_planet.gif', 'home_bg.gif']),
            'origin' => $this->faker->sentence,
        ];
    }
}
