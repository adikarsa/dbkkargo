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

    Route::get('/admin/newpegawai', 'Auth/AuthController@showRegister');
  });

  Route::group(['middleware' => 'kargo'], function()
  {
    Route::get('/kargo/dashboard', 'KargoController@dashboard');
  });

  Route::group(['middleware' => 'dbk'], function()
  {
    Route::get('/dbk/dashboard', 'DBKController@dashboard');
  });

  Route::get('/logout', 'Auth\AuthController@logout');
});
