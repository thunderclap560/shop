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

Route::get('/account',['before'=>'filter.auth','uses'=>'HomeController@account']);
Route::get('/tin-tuc/{alias}/{id}',['as'=>'news-front','uses'=>'HomeController@news']);

Route::get('/san-pham/{alias}/{id}',['as'=>'product-front','uses'=>'HomeController@view']);
Route::get('/ve-chung-toi/{alias}/{id}',['as'=>'about','uses'=>'HomeController@about']);
Route::get('cancel',function(){
    Session::put('cancel' ,2);
});
//Facebook
Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});
Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return Redirect::to('/')->with('message', 'Lỗi xảy ra');

    $me = $facebook->api('/me?fields=id,name,email');

    $user = User::where('email',$me['email'])->get();
    if(count($user) == 0){
        $users = new User;
        $users->firstname = $me['name'];
        $users->lastname = $me['name'];
        $users->email = $me['email'];
        $users->password = Hash::make(Str::random());
        $users->phone = null;
        $users->country = null;
        $users->address = null;
        $users->roles = 0;
        $users->type = 0;
        $users->save();
    }else{
         $users = User::find($user[0]->id);
    }
    Auth::login($users);
    return Redirect::to('/')->with('order', 'Đăng nhập Facebook Thành Công');
});
//Google
Route::get('login/google',function(){
    $code = Input::get( 'code' );

    // get google service
    $googleService = OAuth::consumer( 'Google' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {

        // This was a callback request from google, get the token
        $token = $googleService->requestAccessToken( $code );

        // Send a request with it
        $me = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

        $user = User::where('email',$me['email'])->get();
    if(count($user) == 0){
        $users = new User;
        $users->firstname = $me['name'];
        $users->lastname = $me['name'];
        $users->email = $me['email'];
        $users->password = Hash::make(Str::random());
        $users->phone = null;
        $users->country = null;
        $users->address = null;
        $users->roles = 0;
        $users->type = 0;
        $users->save();
    }else{
         $users = User::find($user[0]->id);
    }
    Auth::login($users);
    return Redirect::to('/')->with('order', 'Đăng nhập Google Thành Công');

    }
    // if not ask for permission first
    else {
        // get googleService authorization
        $url = $googleService->getAuthorizationUri();

        // return to google login url
        return Redirect::to( (string)$url );
    }
});

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
    Route::controller('/pages','PagesController');
    Route::controller('/coupon','CouponController');
    Route::controller('/adver','AdvertiseController');
});

Route::controller('/','HomeController');
