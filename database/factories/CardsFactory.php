<?php

namespace Database\Factories;

use App\Models\columns;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cards>
 */
class CardsFactory extends Factory
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
            'column_id' => columns::factory(),
            'author_id' => User::factory(),
            'executor_id' => User::factory(),
            'description' => $this->faker->text
        ];
    }
}
