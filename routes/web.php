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
Route::middleware('role:Admin')->group(function ()
{
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('movies','MovieController');

Route::resource('actors','ActorController');

Route::resource('directors','DirectorController');

Route::resource('genres','GenresController');
});







//frontend
Route::get('/','PageController@indexfun')->name('homepage');

Route::get('detail/{id}','PageController@detailfun')->name('detailpage');

Route::get('movietype/{id}','PageController@typefun')->name('typepage');

Route::get('cele/{id}','PageController@celefun')->name('celepage');

Route::get('landing','PageController@landingfun')->name('landingpage');

Route::get('comming','PageController@commingfun')->name('commingpage');

Route::get('comming','PageController@commingfun')->name('commingpage');

Route::get('movie','PageController@moviefun')->name('moviepage');

Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('signup','PageController@signupfun')->name('signuppage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
