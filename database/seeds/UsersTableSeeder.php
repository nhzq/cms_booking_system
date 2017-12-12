<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\User::create([
        // 	'name' => 'admin',
        // 	'email' => 'admin@qtc.com',
        // 	'password' => bcrypt('password')
        // ]);

        //Get the name of roles based on the condition
        $role_sa = Role::where('name', 'Super Admin')->first();
        $role_wa = Role::where('name', 'Web Admin')->first();
        $role_sy = Role::where('name', 'System Admin')->first();

        //Create details of users
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
            'password' => bcrypt('password')
        ]);

        $webadmin = User::create([
            'name' => 'Web Admin',
            'email' => 'webadmin@email.com',
            'password' => bcrypt('password')
        ]);

        $systemadmin = User::create([
            'name' => 'System Admin',
            'email' => 'systemadmin@email.com',
            'password' => bcrypt('password')
        ]);

        //Assign roles to the users based on the condition
        $superadmin->roles()->attach($role_sa);
        $webadmin->roles()->attach($role_wa);
        $systemadmin->roles()->attach($role_sy);
    }
}
