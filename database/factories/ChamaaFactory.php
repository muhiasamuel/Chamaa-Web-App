<?php

namespace Database\Factories;

use App\Models\Chamaa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChamaaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chamaa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'chamaa_name' => $this->faker->text($minNbChars = 6, $maxNbChars = 10),
            'chamaa_admin_id' => $this->faker->unique()->numberBetween($min = 1, $max = 100),
            'chamaa_location' => $this->faker->City,
            'chamaa_capacity' => $this->faker-> numberBetween($min = 10, $max = 30),
            'chamaa_subscription' => $this->faker->randomElement(['yes','no']),
            'chamaa_date_reg' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
        ];
    }
}
