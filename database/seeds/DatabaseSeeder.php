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

        // Seed random users
        factory(App\User::class, rand(0,50))->create()->each(function($user){
          $user->active = true;
          $user->save();
          $user->roles()->attach(App\Role::where('name', 'student')->first());
        });

        factory(App\User::class, rand(0,50))->create()->each(function($user){
          $user->active = false;
          $user->save();
          $user->roles()->attach(App\Role::where('name', 'student')->first());
        });

        // Seed the topic table
        $this->call(TopicTableSeeder::class);

        // Seed the questions table
        $this->call(QuestionTableSeeder::class);
    }
}
