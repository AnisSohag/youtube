<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//frontendcontroller




Route::get('/', ['App\Http\Controllers\Frontend\FrontController@index']);
Route::get('/contact', ['App\Http\Controllers\Frontend\FrontController@contact']);


//backend controller

    // Route::get('/create','FrontController@index');
    // Route::get('/user','FrontController@index');
    // Route::get('/dashboard','FrontController@index');



