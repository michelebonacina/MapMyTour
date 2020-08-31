<?php

use App\Models\Waypoint;
use Illuminate\Database\Seeder;

class WaypointSeeder extends Seeder
{
    const NUMBER_OF_WAYPOINTS = 10;     // Number of waypoints to create

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate db with new waypoints
        factory(Waypoint::class, self::NUMBER_OF_WAYPOINTS)->create();
    }
}
