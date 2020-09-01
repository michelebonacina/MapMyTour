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
        // populate db with new users
        factory(User::class, self::NUMBER_OF_USERS)->create();
    }
}
