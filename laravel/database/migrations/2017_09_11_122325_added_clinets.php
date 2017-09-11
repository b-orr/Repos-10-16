<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedClinets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('added_clients', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('pj_project_id');
               $table->integer('client_id');
               $table->timestamps();
               $table->index('id');
               $table->index('pj_project_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('added_clients');
    }
}
