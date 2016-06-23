<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/login', 'Auth\AuthController@Login');

Route::group(['middleware' => 'web'], function () {

  Route::get('/', 'HomepageController@index');

  Route::get('/services', 'HomepageController@services');

  Route::get('/about', 'HomepageController@about');

  Route::get('/contact', 'HomepageController@contact');

  Route::get('/login', 'Auth\AuthController@getLogin');

  Route::group(['middleware' => 'admin'], function()
  {
    Route::get('/admin/dashboard', 'AdminController@dashboard');

    Route::get('/admin/pegawai', 'AdminController@pegawai');

    Route::post('/admin/newpegawai','AdminController@newpegawai');

    Route::delete('/admin/dltpegawai/{id}','AdminController@dltpegawai');
  });

  Route::group(['middleware' => 'pegawai'], function()
  {
    Route::get('/pegawai/dashboard', 'PegawaiController@dashboard');
    Route::get('/pegawai/barang','PegawaiController@barang');
    Route::get('/pegawai/awb','PegawaiController@awb');
    Route::get('/pegawai/status','PegawaiController@status');

    Route::post('/pegawai/newbarang', 'PegawaiController@newbarang');
    Route::post('/pegawai/setAWB', 'PegawaiController@setAWB');
    Route::post('/pegawai/setStatus','PegawaiController@setStatus');

    Route::delete('/pegawai/dltbarang/{id}','PegawaiController@dltbarang');
  });

  Route::get('/logout', 'Auth\AuthController@logout');
});
