<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('chamaa_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('chamaa_id')->references('id')->on('chamaas')->onDelete('cascade');
           $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
       
           $table->string('amount');
            $table->date('date');
            $table->time('time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributions');
    }
}
