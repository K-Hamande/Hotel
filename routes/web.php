<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFeatureController;
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


    Route::get('/admim/Admin_Form',[AdminFormController::class,'Index'])->name('Admin_Form');

    Route::get('/admin/home',[AdminController::class,'Index'])->name('admin_home');


                               // Admin Profile Route

    Route::get('/admin/Edit_Profile',[AdminProfileController::class,'Index'])->name('Edit_Profile');

    Route::post('/admin/Edit_Profile_submit/',[AdminProfileController::class,'Edit_Profile_Submit'])->name('Edit_Profile_Submit');


                                // Admin Slide Route

    Route::get('/admin/Admin_Slide',[AdminSlideController::class,'Index'])->name('Admin_Slide');

    Route::get('/admin/Admin_Slide_Add',[AdminSlideController::class,'Add'])->name('Admin_Slide_Add');

    Route::post('/admin/Admin_Slide_Store',[AdminSlideController::class,'Store'])->name('Admin_Slide_Store');

    Route::post('/admin/Admin_Slide_Submit/{id}',[AdminSlideController::class,'Admin_Slide_Submit'])->name('Admin_Slide_Submit');

    Route::get('/admin/Admin_Slide_Edit/{id}',[AdminSlideController::class,'Admin_Slide_Edit'])->name('Admin_Slide_Edit');

    Route::get('/admin/Admin_Slide_Delete/{id}',[AdminSlideController::class,'Admin_Slide_Delete'])->name('Admin_Slide_Delete');


                                    // Admin Feature Route

    Route::get('/admin/Admin_Feature',[AdminFeatureController::class,'Index'])->name('Admin_Feature');

    Route::get('/admin/Admin_Feature_Add',[AdminFeatureController::class,'Admin_Feature_Add'])->name('Admin_Feature_Add');

    Route::post('/admin/Admin_Feature_Store',[AdminFeatureController::class,'Store'])->name('Admin_Feature_Store');

    Route::post('/admin/Admin_Feature_Update/{id}',[AdminFeatureController::class,'Admin_Feature_Update'])->name('Admin_Feature_Update');

    Route::get('/admin/Admin_Feature_Edit/{id}',[AdminFeatureController::class,'Admin_Feature_Edit'])->name('Admin_Feature_Edit');

    Route::get('/admin/Admin_Feature_Delete/{id}',[AdminFeatureController::class,'Admin_Feature_Delete'])->name('Admin_Feature_Delete');
   
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
