<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsrGroupsValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usr_groups_values', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('usr_group_id');
               $table->string('name');
               $table->integer('value');
               $table->timestamps();
               $table->index('id');
               $table->index('usr_group_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usr_groups_values');
    }
}
