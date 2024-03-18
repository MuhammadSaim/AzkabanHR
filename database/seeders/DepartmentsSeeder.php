<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'Accounts']);
        Department::create(['name' => 'Engineering']);
        Department::create(['name' => 'Human Resource']);
        Department::create(['name' => 'Management']);
    }
}
