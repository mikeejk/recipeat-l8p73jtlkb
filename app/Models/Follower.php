<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

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
    // Function - Role
    public function role()
    {
        // Return (role model has many data refer from the the role model)
        return $this->hasMany(Role::class, 'role_id');
    }
}
