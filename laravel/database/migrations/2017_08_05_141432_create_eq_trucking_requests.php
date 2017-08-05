<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqTruckingRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_trucking_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('status');
            $table->date('pickup_date');
            $table->string('requested_time');
            $table->date('delivery_date');
            $table->integer('shipped_from');
            $table->integer('shipped_to');
            $table->string('site_contact');
            $table->string('delivery_contact');
            $table->string('freight_line');
            $table->string('size_truck');
            $table->string('loading_method');
            $table->string('total_weight');
            $table->integer('created_by');
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
        Schema::dropIfExists('eq_trucking_requests');
    }
}
