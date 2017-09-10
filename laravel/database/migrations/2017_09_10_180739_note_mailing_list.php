<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoteMailingList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('note_mailing_list', function (Blueprint $table) {
               
               $table->increments('id');
               $table->integer('pj_project_id');
               $table->integer('person_id');
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
        Schema::dropIfExists('note_mailing_list');
    }
}
