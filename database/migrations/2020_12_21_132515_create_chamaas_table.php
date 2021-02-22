<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamaasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamaas', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('chamaa_name');
            $table->string('chamaa_location');
            $table->bigInteger('chamaa_admin_id')->unsigned()->unique();
            $table->foreign('chamaa_admin_id')->references('id')->on('members')->onDelete('cascade');
            $table->string('chamaa_capacity');
            $table->string('chamaa_subscription');
            $table->date('chamaa_date_reg');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamaas');
    }
}
