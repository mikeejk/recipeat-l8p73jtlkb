<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef_question extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'user_id',

        // User Entered - Data Saving
        'name',
        'dob',
        'location',
        'state',
        'designation',
        'company',
        'cooking_style',
        'accomplishments',
        'status',
    ];
}
