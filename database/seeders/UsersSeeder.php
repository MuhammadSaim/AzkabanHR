<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // super admin
        $superAdmin = User::create([
            'name'              => 'Super Admin',
            'email'             => 'superadmin@azkabanhr.io',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        $superAdmin->assignRole('super_admin');

        // admin
        $admin = User::create([
            'name'              => 'Admin',
            'email'             => 'admin@azkabanhr.io',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        $admin->assignRole('admin');

        // hr
        $hr = User::create([
            'name'              => 'HR',
            'email'             => 'hr@azkabanhr.io',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        $hr->assignRole('hr');

        // employee
        $employee = User::create([
            'name'              => 'Employee',
            'email'             => 'employee@azkabanhr.io',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        $employee->assignRole('employee');

        // candidate
        $candidate = User::create([
            'name'              => 'Candidate',
            'email'             => 'candidate@azkabanhr.io',
            'password'          => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        $candidate->assignRole('candidate');

    }
}
