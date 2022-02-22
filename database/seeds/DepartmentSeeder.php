<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Department::create([
            'name'  => 'devolopment',
            'emp_id'  => 1,
        ]);
    }
}
