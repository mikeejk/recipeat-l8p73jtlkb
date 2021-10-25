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
        'measurement_id',
        'ingredient_id',
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

    // Function - category
    public function category()
    {
        // return (category model is belongs to this recipe model)
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Function - cuisine
    public function cuisine()
    {
        // return (cuisine model is belongs to this recipe model)
        return $this->belongsTo(Cuisine::class, 'cuisine_id');
    }
}
