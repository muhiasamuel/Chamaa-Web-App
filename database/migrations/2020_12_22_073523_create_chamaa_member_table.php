<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamaaMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamaa_member', function (Blueprint $table) {
            $table->primary(['member_id','chamaa_id']);
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('chamaa_id')->unsigned();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamaa_member');
    }
}
