<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BidResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {
            Schema::create('pj_bid_results', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('pj_project_id');
                $table->date('bid_date');
                $table->integer('client');
                $table->string('scope');
                $table->string('bid_type');
                $table->string('drawing_stage');
                $table->date('start_date'); 
                $table->float('man_day_cost', 12, 2);
                $table->float('bid', 12, 2);
                $table->float('profit', 12, 2);
                $table->float('profit_cost', 12, 2);
                $table->float('csf', 12, 2);
                $table->float('total_csf', 12, 2);
                $table->float('sf', 12, 2);
                $table->float('total_sf', 12, 2);
                $table->float('cy', 12, 2);
                $table->float('total_cy', 12, 2);
                $table->string('lower_bidder');
                $table->float('price', 12, 2);
                $table->float('total_need', 12, 2);
                $table->timestamps();
                $table->index('id');
                $table->index('pj_project_id');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('pj_bid_results');
        }
}
