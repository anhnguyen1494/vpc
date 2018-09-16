<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'Frontend'],function(){
    Route::get('/',['as' => 'home', 'uses' => 'IndexController@index']);
    Route::get('/san-pham/{slug_product}',['as' => 'product.show', 'uses' => 'ProductController@show']);
    Route::get('gio-hang',['as' => 'product.show', 'uses' => 'ProductController@cart']);
    Route::get('danh-muc/{slug_category}',['as' => 'category', 'uses' => 'CategoryController@index']);
    Route::get('don-hang',['as' => 'payment', 'uses' => 'ProductController@payment']);
    Route::post('don-hang',['as' => 'payment.post', 'uses' => 'ProductController@paymentPost']);
    Route::get('dat-hang-thanh-cong',['as' => 'order.success', 'uses' => 'ProductController@orderSuccess']);
});