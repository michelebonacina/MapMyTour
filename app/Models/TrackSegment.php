<?php

namespace App;

use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackSegmentTrait;

class TrackSegment extends Model
{

    use GpxTrackSegmentTrait;

    /**
     * Return track who contains this segment.
     *
     * @return Track track
     */
    public function getTrack()
    {
        return $this->belongsTo(Track::class);
    }

    /**
     * Returns points conteined by the segment.
     *
     * @return Array points list
     */
    public function listTrackPoints()
    {
        return $this->hasMany(TrackPoint::class);
    }
}
