<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class AclDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = new Role();
        $roleAdmin->name = 'Administrator';
        $roleAdmin->slug = Role::ADMIN;
        $roleAdmin->description = 'manage administration privileges';
        $roleAdmin->save();

        $role = new Role();
        $role->name = 'Freelancer';
        $role->slug = Role::FREELANCER;
        $role->description = 'manage freelance privileges';
        $role->save();

        $role = new Role();
        $role->name = 'Client';
        $role->slug = Role::CLIENT;
        $role->description = 'manage customers privileges';
        $role->save();

        $adminUser = new User();
        $adminUser->name = 'Admin';
        $adminUser->email = 'admin@example.org';
        $adminUser->password = bcrypt('admin');
        $adminUser->save();

        $adminUser->assignRole($roleAdmin);
    }
}
