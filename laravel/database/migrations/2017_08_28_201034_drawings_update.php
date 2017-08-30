<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrawingsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::table('drw_drawings', function ($table) {
            		$table->string('image_thumb');
                $table->string('image_org');
            
            });
            
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('drw_drawings', function($table) {
                  $table->dropColumn('image_thumb');
                  $table->dropColumn('image_org');
            
            });
        }
    
}
