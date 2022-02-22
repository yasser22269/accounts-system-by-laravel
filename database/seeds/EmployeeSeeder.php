<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employee::create([
            'name'  => 'admin',
            'phone'  => 01561631631,
            'basic_salary'  => 5000,
            'department_id'  => 1,
            'date_of_employment'  => now(),
            "acvtive" => 1
        ]);
    }
}
