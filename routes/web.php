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

Route::get('/', function () {
    return view('welcome');
});

Route::get('webboard/computerhardware', 'WebboardController@computerhardware');

Route::get('webboard/videogames', 'WebboardController@videogames');

Route::get('webboard/lifestyle', 'WebboardController@lifestyle');

Route::get('webboard/etc', 'WebboardController@etc');

Route::get('webboard/market', 'WebboardController@market');

Route::get('webboard/lovetalk', 'WebboardController@lovetalk');

Route::resource('webboard', 'WebboardController');