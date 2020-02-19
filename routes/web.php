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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/programs', 'HomeController@programs');
Route::get('/free-pass', 'SalesController@free_pass');

Route::post('leads/{type}', 'LeadsController@process_lead');
