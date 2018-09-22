<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear table data
        //DB::table('users')->delete();
        User::query()->delete();

        // Get Roles from Role Table
        $roleStudent = Role::where('name', 'student')->first();
        $roleTeacher = Role::where('name', 'teacher')->first();
        $roleAdministrator = Role::where('name', 'administrator')->first();

        // Create administrator user
        $administrator = new User();
        $administrator->name = 'Alfred Pennyworth';
        $administrator->email = 'alfread@gotham.com';
        $administrator->password = bcrypt('batman');
        $administrator->active = true;
        $administrator->save();
        $administrator->roles()->attach($roleAdministrator);

        // Create teacher user
        $teacher = new User();
        $teacher->name = 'Bruce Wayne';
        $teacher->email = 'bruce@gotham.com';
        $teacher->password = bcrypt('batman');
        $teacher->active = true;
        $teacher->save();
        $teacher->roles()->attach($roleTeacher);

        // Create student user
        $student = new User();
        $student->name = 'Oswald Cobblepot';
        $student->email = 'penguin@gotham.com';
        $student->password = bcrypt('batman');
        $student->active = true;
        $student->save();
        $student->roles()->attach($roleStudent);
    }
}
