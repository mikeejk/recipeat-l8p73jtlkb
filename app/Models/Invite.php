<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class Invite extends Model
{
    use HasFactory;
    use HasRoles;

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

    // Function - Role
    public function role()
    {
        // Return (role model has many data refer from the the role model)
        return $this->hasMany(Role::class, 'role_id');
    }
}
