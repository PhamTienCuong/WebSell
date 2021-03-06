<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });
        Route::get('/table', function () {
            return view('admin.table');
        });
    }); 
});


Route::auth();

Route::get('/home', 'HomeController@index');


