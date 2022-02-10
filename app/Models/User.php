<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use App\Contracts\Likeable;
use App\Models\Like;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Notifiable;
    // use Liker;
    // use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function recipe()
    {
        // Return (cuisine model has many data refer from the the RECIPE model)
        return $this->hasMany(Recipe::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings()
    {
        return $this->belongsToMany('App\Models\User', 'followers', 'follower_id', 'leader_id');
    }

    public function follower()
    {
        return $this->belongsTo(Follower::class, 'followers', 'follower_id', 'leader_id');
    }
    public function isFollowing($user)
    {

        return $this->following()->where('leader_id', $user->id)->count();
        // return !!$this->followers()->where('follower_id', $user->id)->count();
    }
    public function isFollowedByname(User $user)
    {
        return !!$this->followings()->where('leader_id', $user->id)->name;
    }

    public function isFollowedBy(User $user)
    {
        return !!$this->followings()->where('leader_id', $user->id)->count();
    }
    // public function role()
    // {
    //     // Return (role model has many data refer from the the role model)
    //     return $this->hasMany(Role::class, 'user_id');
    // }
    public function role()
    {
        return $this->belongsToMany(Role::class, 'user_id');
    }
    // public function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    // }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like(Likeable $likeable): self
    {
        if ($this->hasLiked($likeable)) {
            return $this;
        }

        (new Like())
            ->user()->associate($this)
            ->likeable()->associate($likeable)
            ->save();

        return $this;
    }

    public function unlike(Likeable $likeable): self
    {
        if (! $this->hasLiked($likeable)) {
            return $this;
        }

        $likeable->likes()
            ->whereHas('user', fn($q) => $q->whereId($this->id))
            ->delete();

        return $this;
    }

    public function hasLiked(Likeable $likeable): bool
    {
        if (! $likeable->exists) {
            return false;
        }

        return $likeable->likes()
            ->whereHas('user', fn($q) =>  $q->whereId($this->id))
            ->exists();
    }
    public function feed()
    {
        // Return (Feed model has many data refer from the the User model)
        return $this->hasMany(Feed::class, 'feed_id');
    }
}
