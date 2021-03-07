<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id("appointment_id");
            $table->integer('customer_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->text('customer_mobile');
            $table->time('app_time');
            $table->date('app_date');
            $table->text('payment_status');
            $table->text('customer_comment');
            $table->text('assigned_doctor')->nullable();
            $table->text('meeting_link')->nullable();
            $table->text('meeting_start_link')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
