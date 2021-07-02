<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->streetAddress(),
            'latitude' => $this->faker->randomFloat(2, -90, 90),
            'longitude' => $this->faker->randomFloat(2, -90, 90),
            'track_id' => $this->faker->unique()->numberBetween(1, Track::count()),
        ];
    }
}
