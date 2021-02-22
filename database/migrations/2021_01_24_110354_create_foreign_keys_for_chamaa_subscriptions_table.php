<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForChamaaSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('chamaa_subscription', function (Blueprint $table) {
           $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
           $table->foreign('chamaa_id')->references('id')->on('chamaas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamaa_subscription',function(Blueprint $table){
            $table->dropForeign('chamaa_subscription_member_id_foreign');
            $table->dropForeign('chamaa_subscription_chamaa_id_foreign');
        });
    }
}
