<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin', 'prefix' => 'Admin'], function () {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'] )->name('Admin');
    Route::get('/logout',[App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
     // ------------------------------Start Admins----------------------------------

                Route::get('profile',[App\Http\Controllers\Admin\ProfileController::class, 'profile'] )->name('admin.profile');
                Route::put('profile/{id}',[App\Http\Controllers\Admin\ProfileController::class, 'updateprofile'])->name('admin.update.profile');
    // ------------------------------End Admins-----------------------------------

});


Route::group(['namespace' => 'Admin', 'middleware' => 'guest:admin', 'prefix' => 'Admin'], function () {

    Route::get('login',[App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login',[App\Http\Controllers\Admin\LoginController::class, 'postLogin'])->name('admin.post.login');

});


Route::get('test',function(){
    return view('Admin.test');
});

