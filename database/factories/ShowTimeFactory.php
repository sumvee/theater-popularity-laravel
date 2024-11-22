<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShowTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'theater_id' => Theater::all()->pluck('id')->random(),
            'movie_id' => Movie::all()->pluck('id')->random(),
            'showtime' => $this->faker->dateTimeBetween('now', '+5 days'),
        ];
    }
}
