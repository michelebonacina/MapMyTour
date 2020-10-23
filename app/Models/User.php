<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Authenticated user.
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns waypoints created by the user.
     *
     * @return waypoints list
     */
    public function waypoints()
    {
        return $this->hasMany(Waypoint::class);
    }

    /**
     * Returns tracks created by the user.
     *
     * @return tracks list
     */
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
