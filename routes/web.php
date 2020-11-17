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

//Dashboard
Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');

//Event
Route::get('/event', 'EventController@index');
Route::get('/event-register', 'EventController@eventJoin');
Route::get('/event-list', 'EventController@eventList');


//Auth
Route::get('/login', 'AuthController@index');
Route::get('/register', 'AuthController@create');
Route::get('/logout', 'AuthController@destroy');
Route::post('/register', 'AuthController@store');
Route::post('/signin', 'AuthController@signin');

//About
Route::get('/siapakita', 'AboutController@index');
