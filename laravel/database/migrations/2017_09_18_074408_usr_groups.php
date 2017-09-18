<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsrGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('usr_groups', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('user_id');
               $table->string('name');
               $table->timestamps();
               $table->index('id');
               $table->index('user_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usr_groups');
    }
}
