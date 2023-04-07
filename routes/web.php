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


Route::get('/admin', 'AdminendController@index')->name('home');
Route::get('/home', 'FrontendController@index')->name('home');

Route::get('admin/course', 'AdminendController@course')->name('course');
Route::get('admin/course-create', 'AdminendController@course_create')->name('course_create');


Auth::routes();

Route::get('profile', 'BackendController@profile')->name('profile');

Route::get('/{course_name}', 'FrontendController@course')->name('courseq');
