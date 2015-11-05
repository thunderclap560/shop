<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::controller('users', 'UsersController');

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/config/{id}',array('uses'=>'DashboardController@config'));
    Route::get('/banner', 'BannerController@index');
    Route::post('/banner/create', 'BannerController@create');
    Route::get('/banner/edit/{id}',array('as'=>'banner.edit','uses'=>'BannerController@edit'));
    Route::post('/banner/edit',array('as'=>'banner.edit.post','uses'=>'BannerController@update'));
    Route::get('/banner/delete/{id}',array('as'=>'banner.delete.post','uses'=>'BannerController@delete'));
 	Route::post('/update',array('as'=>'admin.update','uses'=>'DashboardController@update'));
 	Route::get('/banner/view/{id}',array('as'=>'admin.banner.view','uses'=>'BannerController@view'));
 	Route::post('/banner/view/{id}',array('as'=>'admin.banner.upload','uses'=>'BannerController@upload'));
 	Route::get('/banner/delete-image/{id}/{key}',array('as'=>'admin.banner.delete','uses'=>'BannerController@delete_image'));
 	Route::post('/banner/update-image/{id}',array('as'=>'admin.banner.update','uses'=>'BannerController@update_image'));
 	Route::get('/blocks','BlocksController@index');
 	Route::post('/blocks/upload','BlocksController@upload');
 	Route::post('/blocks/update/{id}','BlocksController@update');
 	Route::get('/blocks/delete/{id}',array('as'=>'delete.block','uses'=>'BlocksController@delete'));
 	Route::controller('/category','CategoryController');
	Route::controller('/product','ProductController');
	Route::controller('/order','OrdersController');
    Route::controller('/comment','CommentController');
    Route::controller('/news','NewsController');
    Route::controller('/coupon','CouponController');
    Route::controller('/adver','AdvertiseController');
});

Route::controller('/','HomeController');
