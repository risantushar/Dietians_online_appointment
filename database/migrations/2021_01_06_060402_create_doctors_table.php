<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id("doctor_id");
            $table->string("doctor_name");
            $table->string("doctor_title");
            $table->text("doctor_email");
            $table->text("doctor_password");
            $table->text("doctor_mobile");
            $table->text("doctor_description");
            $table->text("doctor_image");
            $table->time("checkup_start_time");
            $table->time("checkup_end_time");
            $table->tinyInteger("active_status");
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
        Schema::dropIfExists('doctors');
    }
}
