<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->string('startime')->nullable();
            $table->string('endtime')->nullable();
            $table->string('driver_type')->nullable();;
            $table->string('licence_document_front')->nullable();
            $table->string('licence_document_back')->nullable();
            $table->string('one_signal_player_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
