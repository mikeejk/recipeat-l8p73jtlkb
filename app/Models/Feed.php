<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feed extends Model
{
    use Notifiable;
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
        public function setRecipeAttribute($value)
    {
        $this->attributes['recipe_id'] = json_encode($value);
    }

    public function getRecipeAttribute($value)
    {
        return $this->attributes['recipe_id'] = json_decode($value);
    }

}
