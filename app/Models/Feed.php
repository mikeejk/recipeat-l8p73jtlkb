<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = [
        // Foreign Keys - Data Saving
        'user_id',
         'recipe_id',
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

}
