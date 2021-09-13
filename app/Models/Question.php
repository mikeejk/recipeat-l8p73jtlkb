<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'mail',
        'cookinglevel',
        'allergies',
        'lifestyle',
        'ingredient',
        'pref_cuisine',
        'goals',
        'serving_time',
        'cho_cook',
        'fav_ingr',
        'level_spici',
        'time_spend',
    ];
}
