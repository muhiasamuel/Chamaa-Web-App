<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForChamaaMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('chamaa_member', function (Blueprint $table) {
           $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
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
        Schema::table('chamaa_member',function(Blueprint $table){
            $table->dropForeign('chamaa_member_member_id_foreign');
            $table->dropForeign('chamaa_member_chamaa_id_foreign');
        });
    }
}
