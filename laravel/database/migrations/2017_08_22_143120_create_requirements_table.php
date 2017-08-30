<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('created_by');
            $table->date('requirement_date');
            $table->string('phase');
            $table->string('request_type');
            $table->string('quantity_type');
            $table->text('comments');
            $table->index('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eq_requirements');
    }
}
