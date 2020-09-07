<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    const NUMBER_OF_USERS = 5;          // Number of users to create

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add admin user to db
        $admin = factory(User::class, 1)->make()[0];
        $admin->name = 'Administrator';
        $admin->email = 'admin@mapmytour.test';
        $admin->save();
        // add test user to db
        $test = factory(User::class, 1)->make()[0];
        $test->name = 'Test';
        $test->email = 'test@mapmytour.test';
        $test->save();
        // populate db with new users
        factory(User::class, self::NUMBER_OF_USERS)->create();
    }
}
