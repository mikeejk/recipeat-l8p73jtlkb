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
}
