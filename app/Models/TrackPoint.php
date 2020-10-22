<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackPointTrait;

class TrackPoint extends Model
{

    use GpxTrackPointTrait;

    /**
     * Return segment who contains this point.
     *
     * @return TrackSegment segment
     */
    public function getTrackSegment()
    {
        return $this->belongsTo(TrackSegment::class);
    }
}
