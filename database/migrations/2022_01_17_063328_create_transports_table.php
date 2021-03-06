<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mark_model_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->dateTime('car_date');
            $table->string('dimensions')->nullable();
            $table->string('number')->nullable();
            $table->string('registration')->nullable();
            $table->string('image')->nullable();
            $table->enum('type', ['user', 'company']);
            $table->timestamps();
            $table->foreign('mark_model_id')->references('id')->on('mark_models')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
}
