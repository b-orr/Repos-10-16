<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectUpdate extends Migration
{
    public function up()
    {
        Schema::table('pj_projects', function ($table) {
        		$table->integer('architect');
        		$table->integer('struct_eng');
        		$table->text('description');
        		$table->integer('area');
        		$table->string('prevailing_wage');
        		$table->string('wrap_up');
        		$table->string('performance_bond');
        		$table->integer('op_manager');
        		$table->integer('estimator');
        		$table->integer('owner');
        		
        		
        		$table->index('op_manager');
        		$table->index('estimator');
        		$table->index('owner');
        		$table->index('architect');
        		$table->index('struct_eng');
        		
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pj_projects', function($table) {
              $table->dropColumn('architect');
              $table->dropColumn('struct_eng');
              $table->dropColumn('area');
              $table->dropColumn('description');
              
              $table->dropColumn('prevailing_wage');
              $table->dropColumn('wrap_up');
              $table->dropColumn('performance_bond');
              $table->dropColumn('op_manager');
              $table->dropColumn('estimator');
              $table->dropColumn('owner');
        
        });
    }
}
