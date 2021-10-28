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
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('dob');
            $table->string('month');
            $table->string('year');
            $table->string('current_des');
            $table->string('specialisation');
            $table->string('company_name');
            $table->string('experience_year');
            $table->string('state');
            $table->string('location');
            $table->string('job_describe');
            $table->string('job_responsibilities');
            $table->string('profile_image');
            $table->string('college_name');
            $table->string('college_degree');
            $table->string('college_from');
            $table->string('college_to');
            $table->string('exp_job_employeer');
            $table->string('exp_job_title');
            $table->string('exp_from');
            $table->string('exp_to');
            $table->string('exp_job_description');
            $table->string('resume');
            $table->string('skills');
            $table->string('accomplishment_title');
            $table->string('accomplishment_description');
            $table->string('accomplishment_upload');
            $table->string('degree_name');
            $table->string('degree_description');
            $table->string('about_my_profile');
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
