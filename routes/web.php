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
|/*/
Route::resource('/tasks', 'AddController');


 //Route::get('/tasks', 'AddController@index');
 //Route::get('/tasks/create','AddController@create');
 ///Route::post('/tasks','AddController@store');
 Route::delete('/tasks/{student}','AddController@destory');
// Route::GET('/tasks/{student}','AddController@show');
  Route::put('/tasks/{student}/edit','AddController@edit');
  Route::PATCH ('/tasks/{student}','AddController@update');
