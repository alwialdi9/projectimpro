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

//googleauth
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('google/callback', 'GoogleController@handleGoogleCallback');

//facebookauth
Route::get('auth/facebook', 'FacebookController@redirectToFacebook');
Route::get('facebook/callback', 'FacebookController@handleFacebookCallback');

//Event
Route::get('/event', 'EventController@create');
Route::post('/event-create', 'EventController@store');
Route::get('/event-list', 'EventController@index');
Route::post('/event-register', 'EventController@store');


//Auth
Route::get('/login', 'AuthController@index');
Route::get('/register', 'AuthController@create');
Route::get('/logout', 'AuthController@destroy');
Route::post('/register', 'AuthController@store');
Route::post('/signin', 'AuthController@signin');

//About
Route::get('/siapakita', 'AboutController@index');

//Evidence
Route::get('/bukti', 'BuktiController@index');
