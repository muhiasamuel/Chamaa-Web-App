<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamaaSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamaa_subscription', function (Blueprint $table) {
            $table->primary(['chamaa_id','subscription_id']);
            $table->bigInteger('chamaa_id')->unsigned();
            $table->bigInteger('subscription_id')->unsigned(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamaa_subscription');
    }
}
