<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            // Auto Genrated - ID
            $table->id();

            // Foreign Keys - Data Saving
            $table->unsignedBigInteger('user_id')->nullable();

            // User Entered - Data Saving
            $table->string('name');
            $table->string('gender');
            $table->string('mail');
            $table->string('cookinglevel');
            $table->string('allergies');
            $table->string('lifestyle');
            $table->string('ingredient');
            $table->string('pref_cuisine');
            $table->string('goals');
            $table->string('serving_time');
            $table->string('cho_cook');
            $table->string('fav_ingr');
            $table->string('level_spici');
            $table->string('time_spend');
            $table->integer('status')->nullable();
            $table->string('image');

            // Foreign Keys
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
        Schema::dropIfExists('questions');
    }
}
