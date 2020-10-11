<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/event', 'EventController@index')->name('event');
Route::post('/admin/event/store', 'EventController@store')->name('AddEvent');
Route::get('/admin/event/{id?}', 'EventController@show');
Route::post('/admin/event/update/{id?}', 'EventController@update')->name('UpdateEvent');
Route::delete('/admin/event/{id?}', 'EventController@destroy')->name('DeleteEvent');

Route::get('/admin/attendance', 'AttendanceController@index')->name('attendance');
Route::post('/admin/attendance/store', 'AttendanceController@store')->name('AddAttendance');
