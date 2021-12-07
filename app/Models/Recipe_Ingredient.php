<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
class Recipe_Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'recipe_id',
        'ingredient_id',
        'measurement_id',

        // User Entered - Data Saving
        'quantity',
    ];
    
    public function recipe()
    {
        // Return (role model has many data refer from the the role model)
        return $this->hasMany(Recipe::class, 'ingredient_id');
    }
}
