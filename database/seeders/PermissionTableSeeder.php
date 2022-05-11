<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // 'dashbord-tow',
            'dashbord-admin',
            'dashbord-user',
            'permission',
            'user-list',
            'user-create',
            'user-delete',
            'user-edit',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'soical-list',
            'soical-create',
            'soical-edit',
            'soical-delete',
            'project-list',
            'project-create',
            'project-delete',
            'project-edit',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
