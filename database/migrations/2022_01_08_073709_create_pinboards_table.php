<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinboradsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinborads', function (Blueprint $table) {
            // Auto Genrated - ID
            $table->id();

            // Foreign Key - Data Saving
            // $table->unsignedBigInteger('user_id');

            // User Entered - Data Saving
            $table->string('pin_name');

            //Foreign Key
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
        Schema::dropIfExists('pinborads');
    }
}
