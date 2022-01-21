<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('name');
            $table->string('address');
            $table->enum('status', ['in_process', 'finished'])->default('in_process');
            $table->dateTime('date');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->integer('from_lat')->nullable();
            $table->integer('from_long')->nullable();
            $table->integer('to_lat')->nullable();
            $table->integer('to_long')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
