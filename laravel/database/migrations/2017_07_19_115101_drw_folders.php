<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrwFolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drw_folders', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('pj_project_id');
               $table->string('folder_name');
               $table->string('folder_description');
               $table->integer('last_change_user_id');
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
        Schema::dropIfExists('drw_folders');
    }
}
