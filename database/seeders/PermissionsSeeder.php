<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // roles permissions
        Permission::create(['name' => 'roles']);
        Permission::create(['name' => 'add_roles']);
        Permission::create(['name' => 'update_roles']);
        Permission::create(['name' => 'delete_roles']);

        // settings
        Permission::create(['name' => 'settings']);
        Permission::create(['name' => 'update_settings']);

        // employees
        Permission::create(['name' => 'employees']);
        Permission::create(['name' => 'add_employees']);
        Permission::create(['name' => 'update_employees']);
        Permission::create(['name' => 'delete_employees']);

    }
}
