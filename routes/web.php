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

//Route Series
Route::get('/series', [ 
    'uses' => 'SeriesController@index',
]);

Route::get ('/series/create', [                      //nome da url
    'uses' => 'SeriesController@create',             //nome do controler @ nome da function
]);

