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
            $table->id();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('mail')->nullable();
            $table->string('cookinglevel')->nullable();
            $table->string('allergies')->nullable();
            $table->string('lifestyle')->nullable();
            $table->string('ingredient')->nullable();
            $table->string('pref_cuisine')->nullable();
            $table->string('goals')->nullable();
            $table->string('serving_time')->nullable();
            $table->string('cho_cook')->nullable();
            $table->string('fav_ingr')->nullable();
            $table->string('level_spici')->nullable();
            $table->string('time_spend')->nullable();
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
