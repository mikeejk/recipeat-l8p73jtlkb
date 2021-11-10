<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Follower extends Model
{
    use HasFactory;

    protected $fillable = [
        'follower_id',
        'leader_id'
    ];

    public function user(){
        return $this->hasMany(User::class,'follower_id','leader_id');
    }
    
}
