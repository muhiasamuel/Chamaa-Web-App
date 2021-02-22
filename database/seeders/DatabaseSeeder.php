<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Member;
use App\Models\Chamaa;
use App\Models\Contribution;
use App\Models\Purchase;
use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        member::truncate();
        Chamaa::truncate();
        Contribution::truncate();
        Purchase::truncate();
        User::factory(10)->create();
        Chamaa::factory(20)->create();
        Member::factory(100)->create();
        Purchase::factory(60)->create();
        $this->call(SubscriptionSeeder::class);
        Contribution::factory(200)->create();
        foreach(Member::all() as $member){
            $chamaas = \App\Models\Chamaa::inRandomOrder()->take(rand(1,1))->pluck('id');
            $member->chamaas()->sync($chamaas);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }
}
