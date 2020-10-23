<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Waypoint\GpxWaypointTrait;
use MicheleBonacina\PhpGpxLib\Waypoint\GpxWaypointTraitNeeds;

/**
 * GPS Waypoint.
 */
class Waypoint extends Model implements GpxWaypointTraitNeeds
{

    use GpxWaypointTrait;

    /**
     * Return user who creates this waypoint.
     *
     * @return user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns point latitude.
     *
     * @return float latitude
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Returns point longitude.
     *
     * @return float longitude
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Returns point altitude.
     *
     * @return float altitude
     */
    public function getAltitude(): float
    {
        return $this->altitude;
    }
}
