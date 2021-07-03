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

Route::get('/', function () {
    return view('welcome');
});

Route::get('presidents/{president}/delete', 'PresidentController@delete')->name('presidents.delete');
Route::get('parties/{party}/delete', 'PartyController@delete')->name('parties.delete');
Route::get('states/{state}/delete', 'StateController@delete')->name('states.delete');
Route::resource('/presidents', 'PresidentController');
Route::resource('/parties', 'PartyController');
Route::resource('/states', 'StateController');
