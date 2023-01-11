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
        $category = $this->faker->randomElement(['fantasy', 'space', 'earth']);

        if($category === 'fantasy') {
            $image = $this->faker->randomElement(['fantasy_1.gif', 'fantasy_2.gif']);
        } elseif($category === 'space') {
            $image = $this->faker->randomElement(['space_1.gif', 'space_2.gif']);
        } else {
            $image = $this->faker->randomElement(['earth_1.gif', 'earth_2.gif']);
        }
        return [
            'title' => $this->faker->word,
            'category' => $category,
            'paragraph1' => $this->faker->paragraph,
            'paragraph2' => $this->faker->paragraph,
            'paragraph3' => $this->faker->paragraph,
            'image' => $image,
            'origin' => $this->faker->sentence,
        ];
    }
}
