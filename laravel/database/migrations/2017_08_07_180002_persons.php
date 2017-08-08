<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
		{
		    Schema::create('con_persons', function (Blueprint $table) {
		        $table->increments('id');
		        $table->integer('user_id');
		        $table->string('first_name');
		        $table->string('last_name');
		        $table->string('email');
		        $table->string('title');
		        $table->string('direct_line');
		        $table->string('cell_phone');
		        $table->string('company_association');
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
		    Schema::dropIfExists('con_persons');
		}
    
}
