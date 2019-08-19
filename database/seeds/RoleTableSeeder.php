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
        $role_super_admin = new Role();
	    $role_super_admin->name = 'super admin';
	    $role_super_admin->description = 'Super Admin';
	    $role_super_admin->save();

	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'Admin';
	    $role_admin->save();

	    $role_doctor = new Role();
	    $role_doctor->name = 'doctor';
	    $role_doctor->description = 'Doctor';
	    $role_doctor->save();
    }
}
