<?php

namespace App\Models;

use App\TrackSegment;
use Illuminate\Database\Eloquent\Model;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackTrait;
use MicheleBonacina\PhpGpxLib\Track\GpxTrackTraitNeeds;

class Track extends Model implements GpxTrackTraitNeeds
{

    use GpxTrackTrait;

    /**
     * Return user who creates this track.
     *
     * @return user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Returns segments conteined by the track.
     *
     * @return segments list
     */
    public function trackSegments()
    {
        return $this->hasMany(TrackSegment::class);
    }

    /**
     * Returns segments list.
     *
     * @return array segments list
     */
    public function listTrackSegments(): array
    {
        return $this->trackSegments()->get()->all();
    }
}
