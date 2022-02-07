<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_recipes', function (Blueprint $table) {
              // Auto Genrated - ID
              $table->id();

              // Foreign Key - Data Saving
              $table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('recipe_id');
              $table->unsignedBigInteger('pinboard_id');

              //Foreign Key
              $table->foreign('user_id')->references('id')->on('users');
              $table->foreign('recipe_id')->references('id')->on('recipes');
              $table->foreign('pinboard_id')->references('id')->on('pinboards');

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
        Schema::dropIfExists('pin_recipes');
    }
}
