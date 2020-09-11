<?php

namespace App\Models;

use App\TrackSegment;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    /**
     * Return user who creates this track.
     *
     * @return User user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns segments conteined by the track.
     *
     * @return Array segments list
     */
    public function trackSegments()
    {
        return $this->hasMany(TrackSegment::class);
    }
}
