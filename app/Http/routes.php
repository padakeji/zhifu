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

    Route::get('/merchant', ['middleware' => ['ability:root,merchant_index_index'], 'uses' => 'Merchant\DashboardController@index']);
    Route::get('/merchant/pos', 'Merchant\PosController@index');
    Route::get('/merchant/apply', 'Merchant\ApplyController@index');
    Route::post('/merchant/apply_submit', 'Merchant\ApplyController@store');
    Route::get('/merchant/wechat', ['uses' => 'Merchant\WechatController@index', 'as' => 'merchant.wechat.index']);
    Route::get('/merchant/wechat/create', ['uses' => 'Merchant\WechatController@create', 'as' => 'merchant.wechat.create']);

    Route::get('/admin', ['middleware' => ['ability:root,admin_index_index'], 'uses' => 'Admin\IndexController@index']);
    Route::get('/admin/merchant', ['middleware' => ['ability:root,admin_merchant_index'], 'uses' => 'Admin\MerchantController@index']);
    Route::get('/admin/merchant/{id}', ['middleware' => ['ability:root,admin_merchant_show'], 'uses' => 'Admin\MerchantController@show']);
    Route::put('/admin/merchant/{id}/verify', ['middleware' => ['ability:root,admin_merchant_verify'], 'uses' => 'Admin\MerchantController@verify', 'as' => 'merchant.verify']);
});
