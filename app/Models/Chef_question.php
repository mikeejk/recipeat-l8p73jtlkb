<?php

namespace App\Models;
use App\Models\Follower;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef_question extends Model
{
    use HasFactory;

    protected $fillable = [

        // Foreign Keys - Data Saving
        'user_id',

        // User Entered - Data Saving
        'name',
        'dob',
        'location',
        'state',
        'designation',
        'company',
        'cooking_style',
        'accomplishments',
        'status',
    ];

    public function follower()
    {
        return $this->belongsTo(Follower::class, 'user_id');
    }
}
