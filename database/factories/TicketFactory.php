<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'show_time_id' => Showtime::all()->pluck('id')->random(),
            'movie_id' => Movie::all()->pluck('id')->random(),
            'seat_number' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 5, 20),
        ];
    }
}
