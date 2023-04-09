<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', 'FrontendController@index')->name('index');

Route::get('/course', 'FrontendController@course')->name('course');


Route::get('/sign-in', 'FrontendController@sign_in')->name('sign-in');

Route::get('/sign-up', 'FrontendController@sign_up')->name('sign-up');

Route::get('/reset-password', 'FrontendController@reset')->name('reset-password');

Route::get('/confirm', 'FrontendController@confirm')->name('confirm');

Route::get('/email', 'FrontendController@email')->name('email');


Route::get('/terms-of-service', 'FrontendController@terms_of_service')->name('terms-of-service');



Route::group(['prefix' => 'admin', 'middleware' => ['web','admin']], function(){

    Route::get('/', 'AdminendController@index')->name('admin');
    Route::get('course', 'AdminendController@course')->name('admin.course');
    Route::get('course-create', 'AdminendController@course_create')->name('admin.course_create');
    Route::post('course-create', 'AdminendController@course_store')->name('admin.course-create');

    Route::get('course-edit/{id}', 'AdminendController@course_edit')->name('admin.course.edit');
    Route::post('course-edit/{id}', 'AdminendController@course_update')->name('admin.course.update');
    Route::get('course-delete/{id}', 'AdminendController@course_delete')->name('admin.course.delete');
    
    Route::get('students', 'AdminendController@students')->name('admin.students');
    Route::get('payments', 'AdminendController@payments')->name('admin.payments');
    Route::get('registed-students', 'AdminendController@registed_students')->name('admin.registed_students');
    
    Route::get('profile', 'AdminendController@profile')->name('admin.profile');
    
    
    Route::post('profile', 'AdminendController@profile_update')->name('admin.profile-update');
    

});

Route::controller(GoogleSocialiteController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('profile', 'FrontendController@profile')->name('profile');
    
    Route::get('razorpay', 'PaymentController@razorpay')->name('razorpay');
	
    Route::post('razorpaypayment', 'PaymentController@payment')->name('payment');
});

Route::get('/{course_name}', 'FrontendController@course')->name('courseq');
