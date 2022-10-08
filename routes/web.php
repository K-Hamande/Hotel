<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFormController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


/*  Front */ 
Route::get('/',[HomeController::class,'Index'])->name('Home');
Route::get('/About',[AboutController::class,'Index'])->name('About');


/*  Admin */ 

    Route::middleware(['admin:admin'])->group( function() {
        
    Route::get('/admin/home',[AdminController::class,'Index'])->name('admin_home');

    Route::get('/admin/Edit_Profile',[AdminProfileController::class,'Index'])->name('Edit_Profile');

    Route::post('/admin/Edit_Profile_submit/',[AdminProfileController::class,'Edit_Profile_Submit'])->name('Edit_Profile_Submit');

    Route::get('/admin/Admin_Slide',[AdminSlideController::class,'Index'])->name('Admin_Slide');

    Route::get('/admin/Admin_Slide_Add',[AdminSlideController::class,'Add'])->name('Admin_Slide_Add');

    Route::post('/admin/Admin_Slide_Store',[AdminSlideController::class,'Store'])->name('Admin_Slide_Store');
   
    Route::get('/admim/Admin_Form',[AdminFormController::class,'Index'])->name('Admin_Form');

});



Route::get('/admin/login',[LoginController::class,'Login'])->name('admin_login');
Route::get('/admin/forget_password',[LoginController::class,'Forget_Password'])->name('admin_forget_password');
Route::post('/admin/login_submit',[LoginController::class,'Login_Submit'])->name('admin_login_submit');
Route::get('/admin/logout',[LoginController::class,'Logout'])->name('admin_logout');
Route::post('/admin/password_submit',[LoginController::class,'Password_Submit'])->name('password_submit');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
