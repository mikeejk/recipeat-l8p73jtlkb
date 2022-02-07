<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Recipe_ingredient;
use App\Models\Recipe_Step;
use App\Models\Comment;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;


// use Overtrue\LaravelLike\Traits\Likeable;

class Recipe extends Model implements Likeable,HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    // use Likeable;
    use Likes;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'category_id',
        'cuisine_id',
        'user_id',

        // User Entered - Data Saving
        'recipe_name',
        // 'recipe_image',
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
        'status',
        'creator',
        'cover'

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
    public function Recipe__Ingredient()
    {
        // return (ingredient model is belongs to this recipe model)
        return $this->hasMany(Recipe__Ingredient::class, 'recipe_id');
    }
    public function Recipe__Step()
    {
        // return (ingredient model is belongs to this recipe model)
        return $this->hasMany(Recipe__Step::class, 'recipe_id');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    public function Ingredient()
    {
        // return (ingredient model is belongs to this recipe model)
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }
    public function feed()
    {
        // Return (Feed model has many data refer from the the Recipe model)
        return $this->hasMany(Feed::class, 'feed_id');
    }
}
