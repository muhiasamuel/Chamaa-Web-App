<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'subscription_type'=> $this->faker->randomElement(['premium','basic']),
           'subscription_validity'=> $this->faker->randomElement(['premium','basic']),
           'amount_to_pay'=> $this->faker->numberBetween($min = 500, $max = 2000),
        ];
    }
}
