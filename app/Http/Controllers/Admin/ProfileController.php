<?php

namespace App\Http\Controllers\Admin;

use  App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Models\Admin;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function profile()
    {
        $admin = auth('admin')->user();
        return view('Admin.profile.index', compact('admin'));
    }


    public function updateprofile(AdminProfileRequest $request, $id)
    {
        try {
        DB::beginTransaction();
        $admin = Admin::findOrfail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if (isset($request['password']) && $request['password'] != '') {
            $admin->password = bcrypt($request['password']);
        }
        $admin->save();

         DB::commit();

        return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.profile')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

        }
    }
}
