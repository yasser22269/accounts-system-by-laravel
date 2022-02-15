<?php

namespace App\Http\Controllers\Admin;


use  App\Http\Controllers\Controller;
use App\Models\User;


class HomeController extends Controller
{

    public function index()
    {
        $Userscount = User::count();
       // return today();
        return view('Admin.index',compact('Userscount'));
    }


}
