<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        // 'user_id',

        // User Entered - Data Saving
        'name',
        'gender',
        'mail',
        'cookinglevel',
        'allergies',
        'lifestyle',
        'ingredient',
        'pref_cuisine',
        'goals',
        'serving_time',
        'cho_cook',
        'fav_ingr',
        'level_spici',
        'time_spend',
    ];
}
