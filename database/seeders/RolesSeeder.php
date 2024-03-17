<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'super_admin']);
        $admin = Role::create(['name' => 'admin']);
        $hr = Role::create(['name' => 'hr']);
        $employee = Role::create(['name' => 'employee']);
        $candidate = Role::create(['name' => 'candidate']);

        // super admin
        $superAdmin->syncPermissions(Permission::all());

        // admin
        $admin->syncPermissions(
            Permission::where('name', '!=', 'add_roles')
                    ->where('name', '!=', 'update_roles')
                    ->where('name', '!=', 'delete_roles')
                    ->where('name', '!=', 'update_settings')
                    ->get()
        );

        // hr
        $hr->syncPermissions(
            Permission::where('name', 'LIKE', 'employees%')
                ->get()
        );
    }
}
