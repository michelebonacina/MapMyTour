<?php

use App\Models\Track;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{

    const NUMBER_OF_TRACKS = 10;    // Number of waypoints to create

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate db with new tracks
        factory(Track::class, self::NUMBER_OF_TRACKS)->create();
    }
}
