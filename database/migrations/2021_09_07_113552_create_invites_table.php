<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invites', function (Blueprint $table) {
            
            // Auto Genrated - ID
            $table->id();

            // User Entered - Data Saving
            $table->string('email');
            $table->string('name')->nullable();
            $table->string('contact')->nullable();

            // Foreign Keys - Data Saving
            $table->unsignedBigInteger('role_id')->nullable();

            // Foreign Keys
            $table->foreign('role_id')->references('id')->on('roles');

            // Auto Genrated - Data Saving
            $table->string('token', 16)->unique();

            // Time-Stamp Data
            $table->timestamp('invite_accepted_at')->nullable();
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
        Schema::dropIfExists('invites');
    }
}
