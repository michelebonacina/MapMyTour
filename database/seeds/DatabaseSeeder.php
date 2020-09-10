<?php

use App\Models\Track;
use App\Models\User;
use App\Models\Waypoint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // disable foreig keys
        Schema::disableForeignKeyConstraints();

        // delete current db tables data
        Track::truncate();
        Waypoint::truncate();
        User::truncate();

        // populate db tables with fresh data
        $this->call(UserSeeder::class);
        $this->call(WaypointSeeder::class);
        $this->call(TrackSeeder::class);
    }
}
