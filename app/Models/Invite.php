<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;
    
    protected $fillable = [

        // User Entered - Data Saving
        'email',
        'name',
        'contact',

        // Foreign Keys - Data Saving
        'role_id',

        // Random token - Data Saving
        'token'
    ];
}
