<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {

            // Auto Genrated - ID
            $table->id();

            // Foreign Keys - Data Saving
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('cuisine_id')->nullable();
            $table->unsignedBigInteger('measurement_id')->nullable();
            $table->unsignedBigInteger('ingredient_id')->nullable();

            // User Entered - Data Saving
            $table->string('recipe_name');
            $table->string('preparing_time');
            $table->string('cooking_time');
            $table->integer('serves_people');
            $table->integer('calories_in');
            $table->string('description');
            $table->string('meta_description');
            $table->char('bud_sweet');
            $table->char('bud_sour');
            $table->char('bud_salt');
            $table->char('bud_spicy');
            $table->char('bud_bitter');
            $table->char('bud_astringent');

            // Foreign Keys
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('cuisine_id')->references('id')->on('cuisines');
            $table->foreign('measurement_id')->references('id')->on('measurements');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('recipes');
    }
}
