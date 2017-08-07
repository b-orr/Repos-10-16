<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    	{
    	    Schema::create('con_companies', function (Blueprint $table) {
    	        $table->increments('id');
    	        $table->integer('user_id');
    	        $table->string('name');
    	        $table->string('type');
    	        $table->string('location_name');
    	        $table->string('phone');
    	        $table->string('address');
    	        $table->string('city');
    	        $table->string('state');
    	        $table->string('zip');
    	        $table->timestamps();
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
    	    Schema::dropIfExists('con_companies');
    	}
}
