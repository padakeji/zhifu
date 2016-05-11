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

    Route::get('/merchant', ['middleware' => ['ability:root,merchant'], 'uses' => 'Merchant\DashboardController@index']);
    Route::get('/merchant/pos', 'Merchant\PosController@index');
    Route::get('/merchant/apply', 'Merchant\ApplyController@index');
    Route::post('/merchant/apply_submit', 'Merchant\ApplyController@store');
    Route::get('/admin', ['middleware' => ['ability:root,admin_index_index'], 'uses' => 'Admin\IndexController@index']);
    Route::get('/admin/merchant', ['middleware' => ['ability:root,admin_merchant_index'], 'uses' => 'Admin\MerchantController@index']);
    Route::get('/admin/merchant/{id}', ['middleware' => ['ability:root,admin_merchant_show'], 'uses' => 'Admin\MerchantController@show']);
});
