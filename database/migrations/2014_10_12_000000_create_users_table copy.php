<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['user','admin','driver','company','guest'])->default('user');
            $table->string('name');
            $table->string('email');
            $table->string('user_name');
            $table->string('phone');
            $table->string('phone_verify_code')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('qr_auth_token')->nullable();
            $table->string('one_signal_player_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
