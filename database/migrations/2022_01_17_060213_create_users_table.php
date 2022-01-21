<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('phone');
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('iin')->nullable();
            $table->string('avatar')->nullable();
            $table->string('access_token')->nullable();
            $table->integer('code')->nullable();
            $table->string('promocode')->nullable();
            $table->boolean('actived')->default(false);
            $table->dateTime('phone_verified')->nullable();
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
