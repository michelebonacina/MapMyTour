<?php

namespace App;

use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackSegmentTrait;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackSegmentTraitNeeds;

class TrackSegment extends Model implements GpxTrackSegmentTraitNeeds
{

    use GpxTrackSegmentTrait;

    /**
     * Return track who contains this segment.
     *
     * @return track
     */
    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    /**
     * Returns points conteined by the segment.
     *
     * @return points list
     */
    public function trackPoints()
    {
        return $this->hasMany(TrackPoint::class);
    }

    /**
     * Returns track points list.
     *
     * @return array track points list
     */
    public function listTrackPoints(): array
    {
        return $this->trackPoints()->get()->all();
    }
}
