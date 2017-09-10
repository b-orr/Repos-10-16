<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PjNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pj_notes', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('pj_project_id');
               $table->integer('user_id');
               $table->text('note');
               $table->timestamps();
               $table->index('id');
            });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pj_notes');
    }
}
