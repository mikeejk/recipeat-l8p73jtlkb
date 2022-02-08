<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe__ingredients', function (Blueprint $table) {

            // Auto Genrated - ID
            $table->id();

            // Foreign Keys - Data Saving
            $table->unsignedBigInteger('recipe_id')->nullable();
            $table->unsignedBigInteger('ingredient_id')->nullable();
            $table->unsignedBigInteger('ingredient')->nullable();
            $table->unsignedBigInteger('measurement_id')->nullable();

            // User Entered - Data Saving
            $table->string('quantity');

            // Foreign Keys
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('ingredient')->references('id')->on('ingredients');
            $table->foreign('measurement_id')->references('id')->on('measurements');

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
        Schema::dropIfExists('recipe__ingredients');
    }
}
