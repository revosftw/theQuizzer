<?php

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
        // Seed the roles table
        $this->call(RoleTableSeeder::class);

        // Seed the users table
        $this->call(UserTableSeeder::class);
    }
}
