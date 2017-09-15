<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEqTruckingEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eq_trucking_equipment', function (Blueprint $table)
        {
            $table->integer('project_id')->after('equipment_id');
            $table->string('name')->after('truck_id');
            $table->integer('weight')->after('quantity')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eq_trucking_equipment', function (Blueprint $table) {
            $table->dropColumn('project_id');
            $table->dropColumn('name');
            $table->dropColumn('weight');
        });
    }
}
