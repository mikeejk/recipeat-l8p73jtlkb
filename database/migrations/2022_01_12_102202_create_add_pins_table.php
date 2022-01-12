<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddPinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_pins', function (Blueprint $table) {
          // Auto Genrated - ID
          $table->id();

          // Foreign Key - Data Saving
          $table->unsignedBigInteger('user_id');
        //   $table->unsignedBigInteger('recipe_id');
          $table->unsignedBigInteger('recipe_id');

          $table->unsignedBigInteger('pin_id');
          //Foreign Key
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('recipe_id')->references('id')->on('recipes');
          $table->foreign('pin_id')->references('id')->on('pins');

          // Time-Stamp Data
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
    Schema::dropIfExists('add_pins');
}
}

