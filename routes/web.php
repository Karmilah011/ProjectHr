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
    Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
    Route::get('/dashboardadmin','DashboardController@dashboardadmin')->name('dashboardadmin');
    Route::get('/report','ReportController@report')->name('report.index');
    Route::get('/reportadmin','ReportController@reportadmin')->name('reportadmin.index');
    //route untuk user
    Route::get('/user', 'UserController@index')->name('user.index');

    //route untuk departemen
    Route::get('/departemen', 'DepartemenController@index')->name('departemen.index');
    Route::get('/departemen/create', 'DepartemenController@create');
    Route::post('/departemen/store', 'DepartemenController@store');
    Route::get('/departemen/edit/{id}', 'DepartemenController@edit');
    Route::put('/departemen/update/{id}', 'DepartemenController@update');
    Route::get('/departemen/hapus/{id}', 'DepartemenController@destroy');

    //route untuk fcuti
    Route::get('/fcuti', 'FormCutiController@index')->name('fcuti.index');
    Route::get('/fcuti/create', 'FormCutiController@create');
    Route::post('/fcuti/store', 'FormCutiController@store');
    Route::get('/fcuti/edit/{id}', 'FormCutiController@edit');
    Route::put('/fcuti/update/{id}', 'FormCutiController@update');
    Route::get('/fcuti/hapus/{id}', 'FormCutiController@destroy');

    //route untuk karyawan
    Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
    Route::get('/karyawan/create', 'KaryawanController@create');
    Route::post('/karyawan/store', 'KaryawanController@store');
    Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
    Route::put('/karyawan/update/{id}', 'KaryawanController@update');
    Route::get('/karyawan/hapus/{id}', 'KaryawanController@destroy');


    //route untuk scuti
    Route::get('/scuti', 'SisaCutiController@index')->name('scuti.index');
    Route::get('/scuti/create', 'SisaCutiController@create');
    Route::post('/scuti/store', 'SisaCutiController@store');
    Route::get('/scuti/edit/{id}', 'SisaCutiController@edit');
    Route::put('/scuti/update/{id}', 'SisaCutiController@update');
    Route::get('/scuti/hapus/{id}', 'SisaCutiController@destroy');

    //route untuk approval
    Route::get('/approval', 'ApprovalController@index')->name('approval.index');
    Route::get('/approval/create', 'ApprovalController@create');
    Route::post('/approval/store', 'ApprovalController@store');
    Route::get('/approval/edit/{id}', 'ApprovalController@edit');
    Route::put('/approval/update/{id}', 'ApprovalController@update');
    Route::get('/approval/hapus/{id}', 'ApprovalController@destroy');

    //route untuk struktur
    Route::get('/struktur', 'StrukturController@index')->name('struktur.index');
    Route::get('/struktur/create', 'StrukturController@create');
    Route::post('/struktur/store', 'StrukturController@store');
    Route::get('/struktur/edit/{id}', 'StrukturController@edit');
    Route::put('/struktur/update/{id}', 'StrukturController@update');
    Route::get('/struktur/hapus/{id}', 'StrukturController@destroy');

});