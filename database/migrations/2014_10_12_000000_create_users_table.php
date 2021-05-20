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
            $table->string('cohort_code');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('user_phone_number');
            $table->bigInteger('user_emergency_number');
            $table->date('user_birth_date');
            $table->string('user_nationality');
            $table->string('user_gender');
            $table->string('user_city');
            $table->string('user_address');
            $table->string('user_avatar')->nullable();
            $table->string('user_discord_id');
            $table->integer('user_security_level')->nullable();
            $table->boolean('active_inactive');
            
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
