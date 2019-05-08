<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('deliver_date');
            $table->bigInteger('franchise_id')->unsigned();
            $table->foreign('franchise_id')->references('id')->on('franchises'); 
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
        Schema::dropIfExists('franchises_orders');
    }
}
