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

Route::get('/', 'View@home');
Route::get('/shows', 'View@listShows');
Route::get('/newshow', 'View@createShow');
Route::post('/updateshow', 'View@updateShow');

Route::post('/addaction', 'Serie@create');
Route::post('/deleteaction', 'Serie@delete');
Route::post('/updateaction', 'Serie@update');
