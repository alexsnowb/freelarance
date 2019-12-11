<?php

use Illuminate\Database\Seeder;
use Kodeine\Acl\Models\Eloquent\Role;

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
        $roleAdmin->slug = 'administrator';
        $roleAdmin->description = 'manage administration privileges';
        $roleAdmin->save();

        $role = new Role();
        $role->name = 'Freelancer';
        $role->slug = 'freelancer';
        $role->description = 'manage freelance privileges';
        $role->save();

        $role = new Role();
        $role->name = 'client';
        $role->slug = 'client';
        $role->description = 'manage customers privileges';
        $role->save();

        $adminUser = new \App\User();
        $adminUser->name = 'Admin';
        $adminUser->email = 'admin@example.org';
        $adminUser->password = bcrypt('admin');
        $adminUser->save();

        $adminUser->assignRole($roleAdmin);
    }
}
