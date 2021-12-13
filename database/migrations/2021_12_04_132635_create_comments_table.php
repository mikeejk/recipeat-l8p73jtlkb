<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedBigInteger('user_id');
        // $table->unsignedBigInteger('recipe_id');
        $table->unsignedBigInteger('parent_id')->nullable();
        $table->string('comment');
        $table->unsignedBigInteger('commentable_id');
        $table->string('commentable_type');
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
        Schema::dropIfExists('comments');
    }
}
