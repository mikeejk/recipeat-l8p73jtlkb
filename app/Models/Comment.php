<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'user_id',
        'recipe_id',
        'parent_id',
        'commentable_id',
        'commentable_type',

        //  User Entered - Data Saving
        'comment',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function recipe()
    {
        return $this->belongsTo(Recipe::class,'recipe_id');
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
