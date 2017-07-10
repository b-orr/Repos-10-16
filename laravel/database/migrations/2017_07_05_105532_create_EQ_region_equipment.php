<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEQRegionEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eq_region_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id');
            $table->integer('region_id');
            $table->string('name', 150);
            $table->string('manufacturer', 150);
            $table->string('model', 50);
            $table->string('upc', 50);
            $table->string('weight', 50);
            $table->string('items_per_unit', 50);
            $table->string('notes', 150);
            $table->integer('type');
            $table->integer('forecasted');
            $table->integer('allocated');
            $table->integer('allocated_qty');
            $table->string('picture', 255);
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
        Schema::dropIfExists('eq_region_equipment');
    }
}
