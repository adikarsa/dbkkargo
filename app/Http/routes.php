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



Route::auth();

Route::group(['middleware' => 'web'], function () {

  Route::get('/', 'HomepageController@index');

  Route::get('/services', function()
  {
    return view('homepage.services');
  });

  Route::get('/about', function()
  {
    return view('homepage.about');
  });

  Route::get('/contact', function()
  {
    return view('homepage.contact');
  });

  Route::group(['middleware' => 'admin'], function()
  {
    Route::get('/admin/dashboard', 'AdminController@dashboard');
  });

  Route::group(['middleware' => 'kargo'], function()
  {
    Route::get('/kargo/dashboard', 'KargoController@dashboard');
  });

  Route::group(['middleware' => 'dbk'], function()
  {
    Route::get('/dbk/dashboard', 'DBKController@dashboard');
  });

});
