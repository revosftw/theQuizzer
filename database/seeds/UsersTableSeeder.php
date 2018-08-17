<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//clear table datd
    	DB::table('users')->delete();
    	
        //create administrator
        DB::table('users')->insert([
        	'name'		=>	'administrator',
        	'email'		=>	'administrator@quizzer.com',
        	'password'	=>	bcrypt('secret'),
        ]);
    }
}
