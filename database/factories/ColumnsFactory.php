<?php

namespace Database\Factories;

use App\Models\boards;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\columns>
 */
class ColumnsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'order' => $this->faker->randomDigitNotNull(),
            'board_id' => boards::factory()

        ];
    }
}
