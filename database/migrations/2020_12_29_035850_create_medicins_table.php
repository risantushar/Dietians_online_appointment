<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicins', function (Blueprint $table) {
            $table->id('medicin_id');
            $table->integer('medicin_category');
            $table->string('medicin_name');
            $table->string('medicin_code');
            $table->longText('medicin_description');
            $table->float('medicin_price');
            $table->integer('medicin_mg');
            $table->text('medicin_image');
            $table->tinyInteger('medicin_publication_status');
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
        Schema::dropIfExists('medicins');
    }
}
