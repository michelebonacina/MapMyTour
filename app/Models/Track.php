<?php

namespace App\Models;

use App\TrackSegment;
use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackTrait;

class Track extends Model
{

    use GpxTrackTrait;

    /**
     * Return user who creates this track.
     *
     * @return User user
     */
    public function getUser()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns segments conteined by the track.
     *
     * @return Array segments list
     */
    public function listTrackSegments()
    {
        return $this->hasMany(TrackSegment::class);
    }
}
