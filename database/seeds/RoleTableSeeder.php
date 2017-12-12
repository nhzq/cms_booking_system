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
        $role_super = Role::create([
        	'name' => 'Super Admin',
        	'description' => 'It will handle users'
        ]);

        $role_web = Role::create([
        	'name' => 'Web Admin',
        	'description' => 'It will handle the content of web'
        ]);

        $role_system = Role::create([
        	'name' => 'System Admin',
        	'description' => 'It will handle the event activity'
        ]);
    }
}
