<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
class Recipe_Step extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'recipe_id',

        // User Entered - Data Saving
        'steps',

    ];
    public function recipe()
    {
        // Return (recipe_step model has many data refer from the recipe model)
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
