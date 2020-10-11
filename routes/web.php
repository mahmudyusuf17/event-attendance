<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user/home');
// });

// Route::get('/dashboard', function () {
//     return view('home');
// });
Auth::routes();

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/admin/event', 'EventController');
Route::get('/admin/event/edit/{id}', 'EventController@edit');

Route::resource('/admin/attendance', 'AttendanceController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', 'AuthController@index')->name('auth');
Route::get('/registration', 'RegisterController@index')->name('registration');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
