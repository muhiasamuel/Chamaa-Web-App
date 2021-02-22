<?php

namespace Database\Seeders;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
 
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::truncate();

        Subscription::create(['subscription_type' =>'General','subscription_validity'=>'Free', 'amount_to_pay'=> '0.00ksh' ]);
        Subscription::create(['subscription_type' =>'premium','subscription_validity'=>'1 Year', 'amount_to_pay' => '1000.00ksh']);
        Subscription::create(['subscription_type' =>'Basic','subscription_validity'=>'3 Months', 'amount_to_pay' => '300.00ksh']);
        Subscription::create(['subscription_type' =>'StartUp','subscription_validity'=>'1 week', 'amount_to_pay' => '0.00ksh']);
    }
}
