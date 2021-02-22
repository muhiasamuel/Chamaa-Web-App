<?php

namespace Database\Factories;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'member_id' =>  $this->faker->numberBetween($min = 1, $max = 100),  
            'chamaa_id' => $this->faker->numberBetween($min = 1, $max = 40), 
            'date' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
          
        ];
    }
}
