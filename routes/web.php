<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('doctor/login', 'App\Http\Controllers\Auth\DoctorAuthController@index')->name('index');
Route::post('doctor/login', 'App\Http\Controllers\Auth\DoctorAuthController@login')->name('login');
Route::get('doctor/register', 'App\Http\Controllers\Auth\DoctorAuthController@showRegistrationForm')->name('showRegistrationForm');
Route::post('doctor/register', 'App\Http\Controllers\Auth\DoctorAuthController@register')->name('register');

Route::get('patient/login', 'App\Http\Controllers\Auth\PatientAuthController@index')->name('index');
Route::post('patient/login', 'App\Http\Controllers\Auth\PatientAuthController@login')->name('login');
Route::get('patient/register', 'App\Http\Controllers\Auth\PatientAuthController@showRegistrationForm')->name('showRegistrationForm');
Route::post('patient/register', 'App\Http\Controllers\Auth\PatientAuthController@register')->name('register');
