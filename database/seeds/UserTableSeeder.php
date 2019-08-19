<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin 	= Role::where('name','super admin')->first();
	    $role_admin  		= Role::where('name', 'admin')->first();
	    $role_doctor  		= Role::where('name', 'doctor')->first();
	    
	    $super_admin = new User();
	    $super_admin->name = 'super admin';
	    $super_admin->email = 'super_admin@admin.com';
	    $super_admin->password = Hash::make('password');
	    $super_admin->save();
	    $super_admin->roles()->attach($role_super_admin);
	    

	    $admin = new User();
	    $admin->name = 'admin';
	    $admin->email = 'admin@admin.com';
	    $admin->password = Hash::make('password');
	    $admin->save();
	    $admin->roles()->attach($role_admin);

	    $doctor = new User();
	    $doctor->name = 'doctor';
	    $doctor->email = 'doctor@doctor.com';
	    $doctor->password = Hash::make('password');
	    $doctor->save();
	    $doctor->roles()->attach($role_doctor);
    }
}
