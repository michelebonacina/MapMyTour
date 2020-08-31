<?php

use App\Models\Waypoint;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // delete current db tables data
        Waypoint::truncate();

        // populate db tables with fresh data
        $this->call(WaypointSeeder::class);
    }
}
