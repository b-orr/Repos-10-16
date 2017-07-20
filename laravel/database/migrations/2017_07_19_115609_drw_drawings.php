<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrwDrawings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drw_drawings', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('drw_folder_id');
            $table->integer('drw_upload_id');
            $table->integer('drw_discipline_id');
            $table->string('drawing_name');
            $table->string('description');
            $table->integer('revisited_num');
            $table->date('drawing_date');
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
        Schema::dropIfExists('drw_drawings');
    }
}
