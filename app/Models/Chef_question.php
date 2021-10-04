<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef_question extends Model
{
    use HasFactory;

    protected $fillable = [

        // User Entered - Data Saving
        'f_name',
        'm_name',
        'l_name',
        'dob',
        'month',
        'year',
        'current_des',
        'specialisation',
        'company_name',
        'experience_year',
        'state',
        'location',
        'job_describe',
        'job_responsibilities',
        'profile_image',
        'college_name',
        'college_degree',
        'college_from',
        'college_to',
        'exp_job_employeer',
        'exp_job_title',
        'exp_from',
        'exp_to',
        'exp_job_description',
        'resume',
        'skills',
        'accomplishment_title',
        'accomplishment_description',
        'accomplishment_upload',
        'degree_name',
        'degree_description',
        'about_my_profile'
    ];
}
