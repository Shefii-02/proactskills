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
    Route::get('course', 'AdminendController@course')->name('course');
    Route::get('course-create', 'AdminendController@course_create')->name('course_create');

});

Route::controller(GoogleSocialiteController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('profile', 'FrontendController@profile')->name('profile');
});

Route::get('/{course_name}', 'FrontendController@course')->name('courseq');
