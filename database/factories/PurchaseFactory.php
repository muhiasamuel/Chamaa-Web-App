<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'purchase_code' => $this->faker->swiftBicNumber,
            'subscription_id' =>$this->faker->numberBetween($min = 1, $max = 4),
            'chamaa_id' => $this->faker->numberBetween($min = 1, $max = 40),
            'payment_method' => $this->faker->randomElement(['Mpesa','Bank']),
            'amount_paid' => $this->faker->numberBetween($min = 500, $max = 2000),
            'subscription_start_date' => $this->faker->dateTimeBetween($startDate = '-5 months', $endDate = 'now'),
            'subscription_end_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year '),
        ];
    }
}
