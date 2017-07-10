<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::table('users', function ($table) {
            		$table->string('title');
                $table->integer('group_id');
                $table->integer('region_id');
                $table->integer('active');
             
                $table->index('group_id');
                $table->index('region_id');
                $table->index('active');
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
                  $table->dropColumn('title');
                  $table->dropColumn('group_id');
                  $table->dropColumn('region_id');
                  $table->dropColumn('active');
            
            });
        }
    
}
