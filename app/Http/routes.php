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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/merchant', ['middleware' => ['permission:merchant'], 'uses' => 'Merchant\DashboardController@index']);
    Route::get('/merchant/pos', 'Merchant\PosController@index')->middleware(['permission:pos']);
    Route::get('/merchant/apply', 'Merchant\ApplyController@index');
});
