<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(50, true),
            'date_begin' => $this->faker->date('d-m-Y'),
            'date_end' => $this->faker->date('d-m-Y'),
            'track_id' => $this->faker->numberBetween(1, Track::count()),
        ];
    }
}
