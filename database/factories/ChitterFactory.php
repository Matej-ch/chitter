<?php

namespace Database\Factories;

use App\Models\Chitter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Chitter>
 */
class ChitterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'message' => fake()->text(180)
        ];
    }
}
