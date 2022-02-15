<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email'  => 'admin@admin.com',
            'emp_id'  => 1,
            'password'  => bcrypt('12345678'),
       ]);
    }
}
