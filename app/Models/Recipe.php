<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = [

        // Foreign Keys - Data Saving
        'category_id',
        'cuisine_id',
        'user_id',

        // User Entered - Data Saving
        'recipe_name',
        'preparing_time',
        'cooking_time',
        'serves_people',
        'calories_in',
        'description',
        'steps',
        'meta_description',
        'bud_sweet',
        'bud_sour',
        'bud_salt',
        'bud_spicy',
        'bud_bitter',
        'bud_astringent',

    ];
}
