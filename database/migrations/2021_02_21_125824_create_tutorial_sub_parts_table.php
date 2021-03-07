<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialSubPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_sub_parts', function (Blueprint $table) {
            $table->bigIncrements('sub_tutorial_id');
            $table->integer('tutorial_id');
            $table->string('sub_tutorial_title');
            $table->text('sub_tutorial_link');
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
        Schema::dropIfExists('tutorial_sub_parts');
    }
}
