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

    Route::get('/san-pham/{id}-{slug_product}',['as' => 'product.show', 'uses' => 'ProductController@show']);

    Route::get('gio-hang',['as' => 'product.cart', 'uses' => 'ProductController@cart']);
    Route::post('addcart',['as' => 'product.addcart', 'uses' => 'ProductController@addCart']);
    Route::post('buynow',['as' => 'product.buynow', 'uses' => 'ProductController@buyNow']);
    Route::post('update-cart',['as' => 'product.updatecart', 'uses' => 'ProductController@updateCart']);
    Route::get('remove-cart/{rowId}',['as' => 'product.removecart', 'uses' => 'ProductController@removeCart']);
    Route::get('destroy-cart',['as' => 'product.destroycart', 'uses' => 'ProductController@destroyCart']);

    Route::get('danh-muc/{slug_category}',['as' => 'category', 'uses' => 'CategoryController@index']);

    Route::get('don-hang',['as' => 'payment', 'uses' => 'ProductController@payment']);
    Route::post('pick',['as' => 'payment.pick_city', 'uses' => 'ProductController@pickCity']);
    Route::post('don-hang',['as' => 'order', 'uses' => 'OrderController@store']);

    Route::get('dat-hang-thanh-cong',['as' => 'order.success', 'uses' => 'OrderController@orderSuccess']);
});