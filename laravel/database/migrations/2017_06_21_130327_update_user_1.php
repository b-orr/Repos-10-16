<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('role');
            $table->string('company');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('last_name');
            $table->index('role');
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
              $table->dropColumn('role');
              $table->dropColumn('company');
              $table->dropColumn('phone1');
              $table->dropColumn('phone2');
              $table->dropColumn('address');
              $table->dropColumn('city');
              $table->dropColumn('state');
              $table->dropColumn('zip');
              $table->dropColumn('last_name');
        });
    }
}
