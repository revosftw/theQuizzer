<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create administrator role
        $roleAdministrator = new Role();
        $roleAdministrator->name = 'administrator';
        $roleAdministrator->description = 'Administator';
        $roleAdministrator->save();

        // Create Teacher role
        $roleTeacher = new Role();
        $roleTeacher->name = 'teacher';
        $roleTeacher->description = 'Teacher';
        $roleTeacher->save();

        // Create Student role
        $roleStudent = new Role();
        $roleStudent->name = 'student';
        $roleStudent->description = 'Student';
        $roleStudent->save();
    }
}
