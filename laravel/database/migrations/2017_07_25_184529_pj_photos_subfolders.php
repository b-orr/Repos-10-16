<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PjPhotosSubfolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pj_photos_subfolders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('folder_id');
            $table->string('name');
            $table->timestamps();
            $table->index('folder_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pj_photos_subfolders');
    }
}
