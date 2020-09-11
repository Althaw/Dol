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


//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::resource('movies','MovieController');




//frontend
Route::get('/','PageController@indexfun')->name('homepage');
Route::get('detail','PageController@detailfun')->name('detailpage');
Route::get('landing','PageController@landingfun')->name('landingpage');
Route::get('comming','PageController@commingfun')->name('commingpage');



