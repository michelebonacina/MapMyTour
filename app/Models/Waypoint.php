<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * GPS Waypoint.
 */
class Waypoint extends Model
{

    /**
     * Return user who creates this waypoint-
     *
     * @return User user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
