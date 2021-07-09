<?php

namespace Database\Factories;

use App\Models\Forecast;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForecastFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Forecast::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_name' => $this->faker->sentence(2),
            'event_date' => now(),
            'forecast' => $this->faker->word(),
            'category' => $this->faker->word(),
            'premium' => $this->faker->boolean(),
            'created_at' => now()
        ];
    }
}
