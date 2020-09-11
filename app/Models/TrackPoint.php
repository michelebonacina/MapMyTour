<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackPoint extends Model
{

    /**
     * Return segment who contains this point.
     *
     * @return TrackSegment segment
     */
    public function track()
    {
        return $this->belongsTo(TrackSegment::class);
    }
}
