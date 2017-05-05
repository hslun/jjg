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

Route::get('/admin', function () {
    return view('Admin/index');
});

$goodsList = ['add','edit','show','delete'];
foreach($goodsList as $value){
    Route::any('/admin/goods/'.$value.'/{id}', 'Admin\GoodsController@'.$value);
}

Route::get('/admin/login', 'Admin\IndexController@login');