<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Chef_question;
use App\Models\Question;
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
    public function chef_question(){
        return $this->hasMany(Chef_question::class,'user_id');
    }
    public function Question(){
        return $this->hasMany(Question::class,'user_id');
    }
}
