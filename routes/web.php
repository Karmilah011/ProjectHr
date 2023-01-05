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
//     return view('layouts.master');
// });

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/forgot-password','AuthController@forgot');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@dashboard');
    Route::get('/report','ReportController@report');
    //route untuk user
    Route::get('/user', 'UserController@index');

    //route untuk departemen
    Route::get('/departemen', 'DepartemenController@index');
    Route::get('/departemen/create', 'DepartemenController@create');
    Route::post('/departemen/store', 'DepartemenController@store');
    Route::get('/departemen/edit/{id}', 'DepartemenController@edit');
    Route::put('/departemen/update/{id}', 'DepartemenController@update');
    Route::get('/departemen/hapus/{id}', 'DepartemenController@destroy');

    //route untuk fcuti
    Route::get('/fcuti', 'FormCutiController@index');
    Route::get('/fcuti/create', 'FormCutiController@create');
    Route::post('/fcuti/store', 'FormCutiController@store');
    Route::get('/fcuti/edit/{id}', 'FormCutiController@edit');
    Route::put('/fcuti/update/{id}', 'FormCutiController@update');
    Route::get('/fcuti/hapus/{id}', 'FormCutiController@destroy');

    //route untuk karyawan
    Route::get('/karyawan', 'KaryawanController@index');

    //route untuk scuti
    Route::get('/scuti', 'SisaCutiController@index');
});