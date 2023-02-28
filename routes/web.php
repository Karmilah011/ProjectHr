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

Route::get('/', function () {
    return view('auths.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/forgot-password','AuthController@forgot');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']],function(){
    Route::get('/dashboard-admin','DashboardController@dashboardAdmin')->name('dashboard.dashboard-admin');

    //route untuk user
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::post('/user/store','UserController@store');
    Route::get('/user/edit/{id}','UserController@edit');
    Route::put('/user/update/{id}','UserController@update');
    Route::get('/user/delete/{id}', 'UserController@destroy'); 

    //route untuk fcuti
    Route::get('/fcuti', 'FormCutiController@index')->name('fcuti.index');
    Route::get('/fcuti/create', 'FormCutiController@create');
    Route::post('/fcuti/store', 'FormCutiController@store');
    Route::get('/fcuti/edit/{id}', 'FormCutiController@edit');
    Route::put('/fcuti/update/{id}', 'FormCutiController@update');
    Route::get('/fcuti/hapus/{id}', 'FormCutiController@destroy');

    //route untuk scuti
    Route::get('/scuti', 'SisaCutiController@index')->name('scuti.index');
    Route::get('/scuti/create', 'SisaCutiController@create');
    Route::post('/scuti/store', 'SisaCutiController@store');
    Route::get('/scuti/edit/{id}', 'SisaCutiController@edit');
    Route::put('/scuti/update/{id}', 'SisaCutiController@update');
    Route::get('/scuti/hapus/{id}', 'SisaCutiController@destroy');

});

Route::group(['middleware' => ['auth', 'checkRole:pimpinan']],function(){
    Route::get('/dashboard-pimpinan','DashboardController@dashboardPimpinan')->name('dashboard.dashboard-pimpinan');
    //route untuk user

    //route untuk fcuti
    Route::get('/fcuti', 'FormCutiController@index')->name('fcuti.index');
    Route::get('/fcuti/create', 'FormCutiController@create');
    Route::post('/fcuti/store', 'FormCutiController@store');
    Route::get('/fcuti/edit/{id}', 'FormCutiController@edit');
    Route::put('/fcuti/update/{id}', 'FormCutiController@update');
    Route::get('/fcuti/hapus/{id}', 'FormCutiController@destroy');

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

});

Route::group(['middleware' => ['auth', 'checkRole:karyawan']],function(){
    Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');

    //route untuk fcuti
    Route::get('/fcuti', 'FormCutiController@index')->name('fcuti.index');
    Route::get('/fcuti/create', 'FormCutiController@create');
    Route::post('/fcuti/store', 'FormCutiController@store');
    Route::get('/fcuti/edit/{id}', 'FormCutiController@edit');
    Route::put('/fcuti/update/{id}', 'FormCutiController@update');
    Route::get('/fcuti/hapus/{id}', 'FormCutiController@destroy');

  

    //route untuk scuti
    Route::get('/scuti', 'SisaCutiController@index')->name('scuti.index');
    Route::get('/scuti/create', 'SisaCutiController@create');
    Route::post('/scuti/store', 'SisaCutiController@store');
    Route::get('/scuti/edit/{id}', 'SisaCutiController@edit');
    Route::put('/scuti/update/{id}', 'SisaCutiController@update');
    Route::get('/scuti/hapus/{id}', 'SisaCutiController@destroy');


});

Route::group(['middleware' => ['auth']],function(){
    Route::get('/report','ReportController@report')->name('report.index');
    // Route::get('/report/test','ReportController@report')->name('report.index');
      //route untuk karyawan
      Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
      Route::get('/karyawan/create', 'KaryawanController@create');
      Route::post('/karyawan/store', 'KaryawanController@store');
      Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
      Route::put('/karyawan/update/{id}', 'KaryawanController@update');
      Route::get('/karyawan/hapus/{id}', 'KaryawanController@destroy');

          //route untuk struktur
    Route::get('/struktur', 'StrukturController@index')->name('struktur.index');
    Route::get('/struktur/create', 'StrukturController@create');
    Route::post('/struktur/store', 'StrukturController@store');
    Route::get('/struktur/edit/{id}', 'StrukturController@edit');
    Route::put('/struktur/update/{id}', 'StrukturController@update');
    Route::get('/struktur/hapus/{id}', 'StrukturController@destroy');

});