<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminFAQController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminFormController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


/*  Front */ 
Route::get('/',[HomeController::class,'Index'])->name('Home');

Route::get('/About',[AboutController::class,'Index'])->name('About');

Route::get('/Blog_Home',[AdminPostController::class,'Blog_Home'])->name('Blog_Home');

Route::get('/Post/{id}',[AdminPostController::class,'Post'])->name('Post');

Route::get('/Photo_Home/',[AdminPhotoController::class,'Photo_Home'])->name('Photo_Home');

Route::get('/FAQ_Home/',[AdminFAQController::class,'FAQ_Home'])->name('FAQ_Home');


/*  Admin */ 

    Route::middleware(['admin:admin'])->group( function() {


    Route::get('/admim/Admin_Form',[AdminFormController::class,'Index'])->name('Admin_Form');

    Route::get('/admin/home',[AdminController::class,'Index'])->name('admin_home');


                               // Admin Profile Route

    Route::get('/admin/Edit_Profile',[AdminProfileController::class,'Index'])->name('Edit_Profile');

    Route::post('/admin/Edit_Profile_submit/',[AdminProfileController::class,'Edit_Profile_Submit'])->name('Edit_Profile_Submit');

    Route::get('/admin/logout',[LoginController::class,'Logout'])->name('admin_logout');


                                // Admin Slide Route

    Route::get('/admin/Admin_Slide',[AdminSlideController::class,'Index'])->name('Admin_Slide');

    Route::get('/admin/Admin_Slide_Add',[AdminSlideController::class,'Add'])->name('Admin_Slide_Add');

    Route::post('/admin/Admin_Slide_Store',[AdminSlideController::class,'Store'])->name('Admin_Slide_Store');

    Route::post('/admin/Admin_Slide_Submit/{id}',[AdminSlideController::class,'Admin_Slide_Submit'])->name('Admin_Slide_Submit');

    Route::get('/admin/Admin_Slide_Edit/{id}',[AdminSlideController::class,'Admin_Slide_Edit'])->name('Admin_Slide_Edit');

    Route::get('/admin/Admin_Slide_Delete/{id}',[AdminSlideController::class,'Admin_Slide_Delete'])->name('Admin_Slide_Delete');


                                    // Admin Feature (Caracteristiques) Route

    Route::get('/admin/Admin_Feature',[AdminFeatureController::class,'Index'])->name('Admin_Feature');

    Route::get('/admin/Admin_Feature_Add',[AdminFeatureController::class,'Admin_Feature_Add'])->name('Admin_Feature_Add');

    Route::post('/admin/Admin_Feature_Store',[AdminFeatureController::class,'Store'])->name('Admin_Feature_Store');

    Route::post('/admin/Admin_Feature_Update/{id}',[AdminFeatureController::class,'Admin_Feature_Update'])->name('Admin_Feature_Update');

    Route::get('/admin/Admin_Feature_Edit/{id}',[AdminFeatureController::class,'Admin_Feature_Edit'])->name('Admin_Feature_Edit');

    Route::get('/admin/Admin_Feature_Delete/{id}',[AdminFeatureController::class,'Admin_Feature_Delete'])->name('Admin_Feature_Delete');
   

                                    // Admin Testimonial (Temoignage) Route

    Route::get('/admin/Admin_Testimonial',[AdminTestimonialController::class,'Index'])->name('Admin_Testimonial');

    Route::get('/admin/Admin_Testimonial_Add',[AdminTestimonialController::class,'Admin_Testimonial_Add'])->name('Admin_Testimonial_Add');

    Route::post('/admin/Admin_Testimonial_Store',[AdminTestimonialController::class,'Store'])->name('Admin_Testimonial_Store');

    Route::post('/admin/Admin_Testimonial_Update/{id}',[AdminTestimonialController::class,'Admin_Testimonial_Update'])->name('Admin_Testimonial_Update');

    Route::get('/admin/Admin_Testimonial_Edit/{id}',[AdminTestimonialController::class,'Admin_Testimonial_Edit'])->name('Admin_Testimonial_Edit');

    Route::get('/admin/Admin_Testimonial_Delete/{id}',[AdminTestimonialController::class,'Admin_Testimonial_Delete'])->name('Admin_Testimonial_Delete');



                                    // Admin Post (Blog) Route

    Route::get('/admin/Admin_Post',[AdminPostController::class,'Index'])->name('Admin_Post');

    Route::get('/admin/Admin_Post_Add',[AdminPostController::class,'Admin_Post_Add'])->name('Admin_Post_Add');

    Route::post('/admin/Admin_Post_Store',[AdminPostController::class,'Store'])->name('Admin_Post_Store');

    Route::post('/admin/Admin_Post_Update/{id}',[AdminPostController::class,'Admin_Post_Update'])->name('Admin_Post_Update');

    Route::get('/admin/Admin_Post_Edit/{id}',[AdminPostController::class,'Admin_Post_Edit'])->name('Admin_Post_Edit');

    Route::get('/admin/Admin_Post_Delete/{id}',[AdminPostController::class,'Admin_Post_Delete'])->name('Admin_Post_Delete');

                                    // Admin Galeries Photo Route

    Route::get('/admin/Admin_Photo',[AdminPhotoController::class,'Index'])->name('Admin_Photo');

    Route::get('/admin/Admin_Photo_Add',[AdminPhotoController::class,'Admin_Photo_Add'])->name('Admin_Photo_Add');

    Route::post('/admin/Admin_Photo_Store',[AdminPhotoController::class,'Store'])->name('Admin_Photo_Store');

    Route::post('/admin/Admin_Photo_Update/{id}',[AdminPhotoController::class,'Admin_Photo_Update'])->name('Admin_Photo_Update');

    Route::get('/admin/Admin_Photo_Edit/{id}',[AdminPhotoController::class,'Admin_Photo_Edit'])->name('Admin_Photo_Edit');

    Route::get('/admin/Admin_Photo_Delete/{id}',[AdminPhotoController::class,'Admin_Photo_Delete'])->name('Admin_Photo_Delete');


                             // Admin FAQ Photo Route

    Route::get('/admin/Admin_FAQ',[AdminFAQController::class,'Index'])->name('Admin_FAQ');

    Route::get('/admin/Admin_FAQ_Add',[AdminFAQController::class,'Admin_FAQ_Add'])->name('Admin_FAQ_Add');
        
    Route::post('/admin/Admin_FAQ_Store',[AdminFAQController::class,'Store'])->name('Admin_FAQ_Store');
        
    Route::post('/admin/Admin_FAQ_Update/{id}',[AdminFAQController::class,'Admin_FAQ_Update'])->name('Admin_FAQ_Update');
        
    Route::get('/admin/Admin_FAQ_Edit/{id}',[AdminFAQController::class,'Admin_FAQ_Edit'])->name('Admin_FAQ_Edit');
        
     Route::get('/admin/Admin_FAQ_Delete/{id}',[AdminFAQController::class,'Admin_FAQ_Delete'])->name('Admin_FAQ_Delete');


                             // Admin About Photo Route

    Route::get('/admin/Admin_About',[AdminAboutController::class,'Index'])->name('Admin_About');

    Route::get('/admin/Admin_About_Add',[AdminAboutController::class,'Admin_About_Add'])->name('Admin_About_Add');
        
    Route::post('/admin/Admin_About_Store',[AdminAboutController::class,'Store'])->name('Admin_About_Store');
        
    Route::post('/admin/Admin_About_Update/{id}',[AdminAboutController::class,'Admin_About_Update'])->name('Admin_About_Update');
        
    Route::get('/admin/Admin_About_Edit/{id}',[AdminAboutController::class,'Admin_About_Edit'])->name('Admin_About_Edit');
        
     Route::get('/admin/Admin_About_Delete/{id}',[AdminAboutController::class,'Admin_About_Delete'])->name('Admin_About_Delete');
   
});



Route::get('/admin/login',[LoginController::class,'Login'])->name('admin_login');

Route::get('/admin/forget_password',[LoginController::class,'Forget_Password'])->name('admin_forget_password');

Route::post('/admin/login_submit',[LoginController::class,'Login_Submit'])->name('admin_login_submit');

Route::post('/admin/password_submit',[LoginController::class,'Password_Submit'])->name('password_submit');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
