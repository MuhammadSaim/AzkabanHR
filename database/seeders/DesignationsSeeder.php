<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Accounts
        Designation::create([
            'department_id' => 1,
            'name'          => 'CFO'
        ]);
        Designation::create([
            'department_id' => 1,
            'name'          => 'Head of Accounts'
        ]);
        Designation::create([
            'department_id' => 1,
            'name'          => 'Senior Accountant'
        ]);
        Designation::create([
            'department_id' => 1,
            'name'          => 'Junior Accountant'
        ]);
        Designation::create([
            'department_id' => 1,
            'name'          => 'Associate Accountant'
        ]);

        // Engineering
        Designation::create([
            'department_id' => 2,
            'name'          => 'CTO'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Project Manager'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Team Lead'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Tech Lead'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Senior Software Engineer'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Junior Software Engineer'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Associate Software Engineer'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'UI/UX Designer'
        ]);
        Designation::create([
            'department_id' => 2,
            'name'          => 'Graphics Designer'
        ]);

        // Human Resource
        Designation::create([
            'department_id' => 3,
            'name'          => 'Head of HR'
        ]);
        Designation::create([
            'department_id' => 3,
            'name'          => 'Senior HR'
        ]);
        Designation::create([
            'department_id' => 3,
            'name'          => 'Junior HR'
        ]);
        Designation::create([
            'department_id' => 3,
            'name'          => 'Intern HR'
        ]);

        // Management
        Designation::create([
            'department_id' => 4,
            'name'          => 'CEO'
        ]);
        Designation::create([
            'department_id' => 4,
            'name'          => 'Project Coordinator'
        ]);
    }
}
