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
        Schema::create('salesmens', function (Blueprint $table) {
            $table->id();
            $table->string('payment_request');
            $table->string('Active_status')->default('active');
            $table->integer('payment_Amount');
            $table->string('Response')->nullable();
            $table->text('OrderIdList')->nullable();
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('salesmens');
    }
};
