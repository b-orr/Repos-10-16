<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::table('con_companies', function ($table) {
            	$table->boolean('client_bool');
                
            
            });
            
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('con_companies', function($table) {
                  $table->dropColumn('client_bool');
            
            });
        }
    
}
