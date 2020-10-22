<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Waypoint\GpxWaypointTrait;

/**
 * GPS Waypoint.
 */
class Waypoint extends Model
{

    use GpxWaypointTrait;

    /**
     * Return user who creates this waypoint.
     *
     * @return User user
     */
    public function getUser()
    {
        return $this->belongsTo(User::class);
    }
}
