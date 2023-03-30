<?php

use App\Http\Controllers\PengaduanController;
use App\Pengaduan;
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
    return view('landingpage');
});

// Login
Route::get('/logins','LoginController@login')->name('login');
Route::post('/logins','LoginController@postlogin');
Route::get('/register','LoginController@register');
Route::post('/simpanregister','LoginController@simpanregister')->name('simpanregister');
Route::post('/getkabupaten','LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecmatan','LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa','LoginController@getdesa')->name('getdesa');




Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'checkLevel:masyarakat'], function() {
        // Pengaduan 
        Route::get('/pengaduan/create', 'PengaduanController@create');
        Route::post('/pengaduan/store', 'PengaduanController@store');
        // Laporan
        Route::get('/laporan','PengaduanController@laporan');
     
    });

    // Route::group(['middleware' => 'checkLevel:petugas'], function() {
        // Tanggapan
        Route::get('/tanggapan','TanggapanController@index');
        Route::get('/tanggapan/create', 'TanggapanController@create');
        Route::post('/tanggapan/store', 'TanggapanController@store');
        Route::get('/tanggapan/show/{id_tanggapan}', 'TanggapanController@show');
        Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
        Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
        Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');
         //Pengguna
        Route::get('/pengguna','PenggunaController@index');
        Route::get('/pengguna/show/{id}', 'PenggunaController@show');
        Route::get('/pengguna/delete/{id}', 'PenggunaController@delete');
         // cetak
        Route::get('/cetak', 'PengaduanController@cetak');
        Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
        Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
        Route::get('/pengaduan/delete/{id}', 'PengaduanController@delete');
        Route::get('/pengaduantanggapan/{id}','PengaduanController@pengaduantanggapan');
        Route::get('/pengaduan','PengaduanController@index');


    // });

    // Route::group(['middleware' => 'checkLevel:admin'], function() {
         // Tanggapan
         Route::get('/tanggapan','TanggapanController@index');
         Route::get('/tanggapan/create', 'TanggapanController@create');
         Route::post('/tanggapan/store', 'TanggapanController@store');
         Route::get('/tanggapan/show/{id_tanggapan}', 'TanggapanController@show');
         Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
         Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
         Route::get('/tanggapan/delete/{id_tanggapan}', 'TanggapanController@delete');
          //Pengguna
         Route::get('/pengguna','PenggunaController@index');
         Route::get('/pengguna/show/{id}', 'PenggunaController@show');
         Route::get('/pengguna/delete/{id}', 'PenggunaController@delete');
         Route::get('/pengguna/edit/{id}', 'PenggunaController@edit');
         Route::put('/pengguna/update/{id}', 'PenggunaController@update');
          // cetak
          Route::get('/cetak', 'PengaduanController@cetak');
          Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
          Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
          Route::get('/pengaduan/delete/{id}', 'PengaduanController@delete');
          Route::get('/pengaduantanggapan/{id}','PengaduanController@pengaduantanggapan');
          Route::get('/pengaduan','PengaduanController@index');
          Route::get('/laporanadmin', 'PengaduanController@laporanadmin');


    // });
    
    // Profile
    Route::get('/profile/{id}', 'ProfilController@show');
    
    // Logout
    Route::get('/logout', 'LoginController@logout');

     // Dashboard
     Route::get('/dashboard','DashboardController@index');

     Route::get('/pengaduan/show/{id_pengaduan}', 'PengaduanController@show');
});




