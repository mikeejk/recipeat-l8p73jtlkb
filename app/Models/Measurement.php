<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        // User Entered - Data Saving
        'measurement'
    ];
    public function ingredient()
    {
        // Return (ingredient model has many data refer from the the role model)
        return $this->belongsTo(Ingredient::class, 'ingredient_id');
    }
    public function recipe_ingredient()
    {
        // Return (recipe_ingredient model has many data refer from the the role model)
        return $this->hasMany(Recipe_Ingredient::class, 'measurement_id');
    }
    public function recipe()
    {
        // Return (recipe model has many data refer from the the role model)
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
