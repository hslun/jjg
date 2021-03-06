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

Route::get('/', 'Home\IndexController@index');

Route::get('/admin', function () {
    return view('Admin/index');
});

$goodsList = ['add','edit','show','delete'];
foreach($goodsList as $key=>$value){
	if($value == 'edit' || $value == 'delete'){
    	Route::any('/admin/goods/'.$value.'/{id}', 'Admin\GoodsController@'.$value);
	}
	if($key == count($goodsList)-1){
		Route::any('/admin/goods/', 'Admin\GoodsController@show');
	}
	Route::any('/admin/goods/'.$value, 'Admin\GoodsController@'.$value);
}

Route::get('/admin/login', 'Admin\IndexController@login');