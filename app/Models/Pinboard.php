<?php

namespace App\Models;
use App\Models\User;
use App\Models\Pin_recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinboard extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'user_id',

        // User Entered - Data Saving
        'pin_name'
    ];
    public function user()
    {
        // Return (user model has many data refer from the the user model)
        return $this->hasMany(User::class, 'user_id');
    }
    public function pin_recipe()
    {
        // Return (user model has many data refer from the the user model)
        return $this->hasMany(Pin_recipe::class, 'pinboard_id');
    }

}
