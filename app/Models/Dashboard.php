<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class dashboard extends Model
{
    use HasFactory;

    public function follower()
{
    return $this->belongsTo(Follower::class, 'follower_id','leader_id');
}
public function followings()
    {
        return $this->belongsToMany('App\Models\User', 'followers', 'follower_id', 'leader_id');
    }
public function isFollowedByname(User $user)
{
    return !!$this->followings()->where('leader_id', $user->id)->name;
}
public function user()
    {
        // return (user model is belongs to this recipe model)
        return $this->belongsTo(User::class, 'user_id');
    }
}
