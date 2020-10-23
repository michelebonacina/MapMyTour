<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackPointTrait;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackPointTraitNeeds;

class TrackPoint extends Model implements GpxTrackPointTraitNeeds
{

    use GpxTrackPointTrait;

    /**
     * Return segment who contains this point.
     *
     * @return segment
     */
    public function trackSegment()
    {
        return $this->belongsTo(TrackSegment::class);
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

    /**
     * Returns track point time.
     *
     * @return DateTime time
     */
    public function getTime(): DateTime
    {
        return new DateTime($this->time);
    }

    /**
     * Returns track point temperature.
     *
     * @return float temperature
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }
}
