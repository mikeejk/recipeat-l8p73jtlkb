<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;

    protected $fillable = [
        // User Entered - Data Saving
        'cuisine'
    ];

    // Function - cuisine
    public function recipe()
    {
        // Return (cuisine model has many data refer from the the RECIPE model)
        return $this->hasMany(Recipe::class, 'cuisine_id');
    }
}
