<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        // User Entered - Data Saving
        'ingredient',
        'recipe_id'
    ];
    public function recipe_ingredient()
    {
        // Return (role model has many data refer from the the role model)
        return $this->hasMany(Recipe_Ingredient::class, 'ingredient_id');
    }
}
