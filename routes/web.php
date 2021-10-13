<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::get('google', 'Auth\GoogleController@redirect');
Route::get('google/callback', 'Auth\GoogleController@callback');

// Admin
Route::get('admin-login','Auth\AdminAuthController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\AdminAuthController@login')->name('admin.login.submit');
Route::get('admin-logout', 'Auth\AdminAuthController@logout')->name('admin.logout');
Route::get('admin', 'Auth\AdminController@index')->name('admin.dashboard');

Route::middleware('auth:admin')->group(function(){
    //User Management
    Route::resource('users','Auth\UserController');
    Route::get('/apiUsers','Auth\UserController@apiUsers')->name('api.users');

    //Karyawan
    Route::resource('karyawans','Auth\KaryawanController');
    Route::get('/apiKaryawans','Auth\KaryawanController@apiKaryawans')->name('api.karyawans');
    Route::get('/exportKaryawanAllExcel','Auth\KaryawanController@exportExcel')->name('exportExcel.karyawanAll');

    //Nasabah
    Route::resource('nasabah','Auth\NasabahController');
    Route::get('/apiNasabahs','Auth\NasabahController@apiNasabahs')->name('api.nasabahs');
    Route::post('/importNasabah','Auth\NasabahController@ImportExcel')->name('import.nasabah');
    Route::get('/exportNasabahAllExcel','Auth\NasabahController@exportExcel')->name('exportExcel.nasabahAll');
});


