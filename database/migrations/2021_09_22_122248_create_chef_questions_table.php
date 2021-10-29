<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_questions', function (Blueprint $table) {

            // Auto Genrated - ID
            $table->id();

            // Foreign Keys - Data Saving
            $table->unsignedBigInteger('user_id')->nullable();

            // User Entered - Data Saving
            $table->string('name');
            $table->string('dob');
            $table->string('location');
            $table->string('state');
            $table->string('designation');
            $table->string('company');
            $table->string('cooking_style');
            $table->string('accomplishments');

            //default value
            $table->integer('status');

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
        Schema::dropIfExists('chef_questions');
    }
}
