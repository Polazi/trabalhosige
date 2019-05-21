<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStoreIdToFranchisesOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('franchises_orders', function (Blueprint $table) {
            $table->bigInteger('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('franchises_orders', function (Blueprint $table) {
            $table->dropColumn('store_id');
        });
    }
}
