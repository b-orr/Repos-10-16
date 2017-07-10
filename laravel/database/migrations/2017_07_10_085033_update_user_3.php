<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
       Schema::table('users', function ($table) {
       	 
           $table->integer('parent_user_id');
          
           $table->index('parent_user_id');
       });
       
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::table('users', function($table) {
             $table->dropColumn('parent_user_id');
           
       
       });
   }
}
