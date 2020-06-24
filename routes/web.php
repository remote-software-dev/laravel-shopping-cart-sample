<?php
Route::get('/', [
    'as' => 'welcome',
    'uses' => 'ProductController@index'    
]);

Route::post('/store', [
    'as' => 'store',
    'uses' => 'ProductController@store'    
]);

Route::get('/cart', [
    'as' => 'cart',
    'uses' => 'ProductController@showCart'    
]);


Route::post('/update', [
    'as'=>'update',
    'uses'=>'ProductController@updateCart'
]);

Route::post('/remove', [
    'as'=>'remove',
    'uses'=>'ProductController@removeCart'
]);

Route::post('/clear', [
    'as'=>'clear',
    'uses'=>'ProductController@clearCart'
]);