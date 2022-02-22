<?php

namespace App\Http\Controllers\Admin;


use  App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;


class HomeController extends Controller
{

    public function index()
    {
        $Employeescount = Employee::count();
       // return today();
        return view('Admin.index',compact('Employeescount'));
    }


}
