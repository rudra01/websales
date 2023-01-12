<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_defects', function (Blueprint $table) {
            $table->id();
            $table->integer('Total_number');
            $table->integer('Total_amount');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('shipment_orders')->onDelete('cascade');
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
        Schema::dropIfExists('product_defects');
    }
};
