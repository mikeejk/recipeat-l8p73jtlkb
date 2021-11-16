<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Recipe extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'category_id',
        'cuisine_id',
        'user_id',

        // User Entered - Data Saving
        'recipe_name',
        'preparing_time',
        'cooking_time',
        'serves_people',
        'calories_in',
        'description',
        'meta_description',
        'bud_sweet',
        'bud_sour',
        'bud_salt',
        'bud_spicy',
        'bud_bitter',
        'bud_astringent',
        'status'
    ];

    // Function - category
    public function category()
    {
        // return (category model is belongs to this recipe model)
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Function - cuisine
    public function cuisine()
    {
        // return (cuisine model is belongs to this recipe model)
        return $this->belongsTo(Cuisine::class, 'cuisine_id');
    }
    public function user()
    {
        // return (user model is belongs to this recipe model)
        return $this->belongsTo(User::class, 'user_id');
    }
    public function role()
    {
        // Return (role model has many data refer from the the role model)
        return $this->hasMany(Role::class, 'role_id');
    }
}
