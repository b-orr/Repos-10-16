<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id');
            $table->integer('equipment_id');
            $table->integer('project_id');
            $table->string('reason');
            $table->integer('owner');
            $table->integer('manager');
            $table->integer('quantity');
            $table->integer('purchased_from');
            $table->float('purchase_price', 8, 2);
            $table->integer('company_id_number');
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
        Schema::dropIfExists('eq_inventory');
    }
}
