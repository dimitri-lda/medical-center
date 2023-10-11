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

// Для Доктора
Route::get('doctor/login', 'Auth\DoctorAuthController@showLoginForm');
Route::post('doctor/login', 'Auth\DoctorAuthController@login');
Route::get('doctor/register', 'Auth\DoctorAuthController@showRegistrationForm');
Route::post('doctor/register', 'Auth\DoctorAuthController@register');

// Для Пациента
Route::get('patient/login', 'Auth\PatientAuthController@showLoginForm');
Route::post('patient/login', 'Auth\PatientAuthController@login');
Route::get('patient/register', 'Auth\PatientAuthController@showRegistrationForm');
Route::post('patient/register', 'Auth\PatientAuthController@register');
