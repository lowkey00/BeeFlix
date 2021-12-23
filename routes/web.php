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
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\MoviesController@index');

// Route::get('/movies', 'App\Http\Controllers\MoviesController@index');
// Route::get('/home', function() {
//     return view('home');
// });

Route::resource('movies', 'App\Http\Controllers\MoviesController');

Route::resource('genre', 'App\Http\Controllers\GenreController');