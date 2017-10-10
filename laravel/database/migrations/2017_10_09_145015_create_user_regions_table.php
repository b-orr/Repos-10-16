<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregions', function (Blueprint $table) {
		        $table->increments('id');
		        $table->integer('user_id')->unsigned()->nullable();
		        $table->integer('region_id')->unsigned()->nullable();
                        $table->tinyInteger('is_default')->default(0);
		        $table->timestamps();
		        $table->index('user_id');
		        $table->index('region_id');
                        $table->foreign('region_id')->references('id')->on('regions');
                        $table->foreign('user_id')->references('id')->on('users');
                        
		    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userregions');
    }
}
