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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('Profileimg')->default('-');
            $table->string('Phone')->default('-');
            $table->date('DOB')->nullable();
            $table->string('City')->default('-');
            $table->string('address')->default('-');
            $table->string('state')->default('-');
            $table->string('Country')->default('-');
            $table->text('Comment')->nullable();
            $table->string('Status')->default('Active');
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
        Schema::dropIfExists('profiles');
    }
};
