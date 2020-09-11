<?php

namespace App;

use App\Models\Track;
use Illuminate\Database\Eloquent\Model;

class TrackSegment extends Model
{

    /**
     * Return track who contains this segment.
     *
     * @return Track track
     */
    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    /**
     * Returns points conteined by the segment.
     *
     * @return Array points list
     */
    public function trackPoints()
    {
        return $this->hasMany(TrackPoint::class);
    }
}
