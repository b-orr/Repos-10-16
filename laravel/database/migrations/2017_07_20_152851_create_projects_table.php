<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pj_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('submited_user_id');
            $table->integer('rating');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('structure_use');
            $table->string('structure_type');
            $table->string('status');
            
            
            $table->date('bid_date');
            $table->time('bid_time');
            $table->string('bid_site_address');
            $table->string('bid_username');
            $table->string('bid_password');
            
            $table->string('scope');
            
            $table->date('start_date');
            $table->date('est_date');
            $table->integer('duration_start');
            $table->integer('duration_duration');
            $table->integer('duration_finish');
            
            $table->index('user_id');
            $table->index('submited_user_id');
            
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
        Schema::dropIfExists('pj_projects');
    }
}
