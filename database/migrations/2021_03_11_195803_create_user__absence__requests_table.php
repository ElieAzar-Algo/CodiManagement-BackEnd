<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAbsenceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__absence__requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('absence_reason');
            $table->date('absence_requested_date');
            $table->date('absence_start_date');
            $table->date('absence_end_date');
            $table->boolean('absence_approved');
        
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
        Schema::dropIfExists('user__absence__requests');
    }
}
