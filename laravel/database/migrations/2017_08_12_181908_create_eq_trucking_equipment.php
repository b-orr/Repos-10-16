<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqTruckingEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_trucking_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('truck_id');
            $table->integer('equipment_id');
            $table->integer('quantity');
            $table->float('total_weight', 8, 2);
            $table->timestamps();
            $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eq_trucking_equipment');
    }
}
