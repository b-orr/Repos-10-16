<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqTransferRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_transfer_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('status');
            $table->date('pickup_date');
            $table->date('delivery_date');
            $table->integer('shipped_from');
            $table->integer('shipped_to');
            $table->string('loaded_by');
            $table->string('delivery_contact');
            $table->string('delivery_number');
            $table->string('freight_line');
            $table->string('total_weight');
            $table->string('load_scheduled');
            $table->string('load_actual');
            $table->string('load_departure');
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
        Schema::dropIfExists('eq_transfer_requests');
    }
}
