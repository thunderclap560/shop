<?php
 
class UsersController extends BaseController {
    protected $layout = "layouts.main";

    public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('getDashboard')));

	}

    public function getRegister() {
    $this->layout->content = View::make('users.register');
	}


	public function getLogin() {
    $this->layout->content = View::make('users.login');
	}

	public function getLogout() {
    if(isset(Auth::user()->roles) == 1 && !empty(Auth::user()->roles)){
		Auth::logout();
    	return Redirect::to('users/login')->with('message', 'Bạn đã đăng xuất !');
    }else{
    	Auth::logout();
    	return Redirect::to('/')->with('order', 'Bạn đã đăng xuất !');
    }
    
}

	public function postSignin() {
		if(Input::get('type') == 1){

			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
				    return Redirect::to('order')->with('login', 'Đăng nhập thành công !');
				} else {
				    return Redirect::to('order')
				        ->with('login', 'Lỗi đăng nhập !')
				        ->withInput();
				}  
	          
	}elseif(Input::get('type') == 2){

			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
				    return Redirect::to('/')->with('order', 'Đăng nhập thành công !');
				} else {
				    return Redirect::to('/login')
				        ->with('auth', 'Lỗi đăng nhập !')
				        ->withInput();
				}  

	}else{
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
				    return Redirect::to('admin/dashboard')->with('message', 'Đăng nhập thành công !');
				} else {
				    return Redirect::to('users/login')
				        ->with('message', 'Lỗi đăng nhập !')
				        ->withInput();
				}   
	}
}

	// public function getDashboard() {
 //    $this->layout->content = View::make('users.dashboard');
	// }

	public function postChange(){
		$validator = Validator::make(Input::all(),
							array(
								'password' 		=> 'required|min:6',
								'old_password'	=> 'required|min:6',
								'password_confirmation'=> 'required|same:password|min:6'
							)
		);
		if($validator->fails()) {
			return Redirect::to('account')->withErrors($validator)->withInput();
		}else{
			$user = User::find(Auth::user()->id);
			$old_password = Input::get('old_password');
			$password 	= Input::get('password');
			if(Hash::check($old_password, $user->getAuthPassword())){
				$user->password = Hash::make($password);
				$user->save();
				return Redirect::to('account')->with('global', 'Mật khẩu đã được thay đổi');
			}else{
				return Redirect::to('account')->with('old', 'Mật khẩu cũ không chính xác');
			}
		}
	
	}

	public function postCreate() {
      $validator = Validator::make(Input::all(), User::$rules);
 
   	if ($validator->passes()) {
        $user = new User;
	    $user->firstname = Input::get('firstname');
	    $user->lastname = Input::get('lastname');
	    $user->email = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	    $user->save();
	    return Redirect::to('login')->with('auth', 'Tạo tài khoản thành công ! hãy đăng nhập');
    } else {
        return Redirect::to('register')->with('register', 'Lỗi xảy ra')->withErrors($validator)->withInput();
 
    }
	}    	

}
?>