<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('Admin.Auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {

        //validation

        //check , store , update

        $remember_token = $request->has('remember_token') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"),
         'password' => $request->input("Password") ], $remember_token)) {
            return redirect()->route('Admin');
        }
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


}
