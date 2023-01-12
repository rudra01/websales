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
        Schema::create('shipment__payments', function (Blueprint $table) {
            $table->id();
            $table->date('Transaction_date');
            $table->integer('Amount');
            $table->integer('Payment_status');
            $table->unsignedBigInteger('Shipmentorder_id');
            $table->foreign('Shipmentorder_id')->references('id')->on('shipment_orders')->onDelete('cascade');
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
        Schema::dropIfExists('shipment__payments');
    }
};
