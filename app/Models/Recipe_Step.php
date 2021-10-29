<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe_Step extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'recipe_id',

        // User Entered - Data Saving
        'steps',

    ];
}
