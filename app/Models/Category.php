<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        // User Entered - Data Saving
        'category'
    ];

    // Function - cuisine
    public function recipe()
    {
        // Return (category model has many data refer from the the RECIPE model)
        return $this->hasMany(Recipe::class, 'category_id');
    }
}
