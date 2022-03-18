<?php

namespace App\Models;
use App\Models\Pinboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin_recipe extends Model
{
    use HasFactory;
    protected $fillable = [
     // Foreign Keys - Data Saving
     'user_id',
      'recipe_id',
     'pinboard_id',
     'status',

    ];
    public function user()
    {
        // Return (User model has many data refer from the the User model)
        return $this->hasMany(User::class, 'user_id');
    }
    public function recipe()
    {
        // Return (Recipe model has many data refer from the the Recipe model)
        return $this->hasMany(Recipe::class, 'recipe_id');
    }
    public function pinboard()
    {
        // Return (User model has many data refer from the the User model)
        return $this->belongsTo(Pinboard::class, 'pinboard_id');
    }
}
