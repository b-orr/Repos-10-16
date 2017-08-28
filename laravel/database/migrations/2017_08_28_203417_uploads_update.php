<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UploadsUpdate extends Migration
{ 
       /**
        * Run the migrations.
        *
        * @return void
        */
       public function up()
           {
               Schema::table('drw_uploads', function ($table) {
               		$table->integer('processed');
              
               });
               
           }
       
           /**
            * Reverse the migrations.
            *
            * @return void
            */
           public function down()
           {
               Schema::table('drw_uploads', function($table) {
                     $table->dropColumn('processed');
                    
               
               });
           }
       
   }