<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('members')->insert([
        'member_name' => Str::random(10),
        'member_phone' => Str::random(10),
        'member_password' => Hash::make(20),
        
        'member_date_reg' => Carbon::parse(20),

      ]);  
    }
}
