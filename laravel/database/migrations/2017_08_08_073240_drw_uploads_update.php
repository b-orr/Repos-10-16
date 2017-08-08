<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrwUploadsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drw_uploads', function ($table) {
            $table->string('location');
            $table->string('folder_id');
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
            $table->string('location');
            $table->string('folder_id');
        });
    }
}
