<?php

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
//     return view('welcome');
// });

Route::get('/','AuthController@index');
Route::get('/home','FrontController@index');
route::post('/loginPost', 'AuthController@loginPost');
Route::get('/logout','AuthController@logout');
