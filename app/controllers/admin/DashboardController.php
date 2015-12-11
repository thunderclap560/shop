<?php
 
class DashboardController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    	if ( Request::segment(3) != null ){   		
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
    	}
	}
	
	public function index(){
		$order = DB::table('orders')->count();
		$product = DB::table('products')->count();
		$user = DB::table('news')->count();
		$comment = DB::table('comments')->count();
		$this->layout->content = View::make('admin.index')->with([
			'order'=>$order,'product'=>$product,'user'=>$user,'comment'=>$comment
			]);
	}
	public function update(){
		$data  =  Configs::find(1);
		$destinationPath = public_path().'/upload/image/';
		//popup
		if(Input::hasFile('image_popup')){
        	$popup = Input::file('image_popup');
       		$popup_name = $popup->getClientOriginalName();
       		$imageTypes = explode('.',$popup_name);
			$imageTypes = $imageTypes[count($imageTypes)-1];
			$imageNames = md5(uniqid()).'.'.$imageTypes;
        	$uploadSuccesss   = $popup->move($destinationPath, $imageNames);	
        	$data->image_popup=$imageNames;
		}
        //popup
		$image_old = $data->first(['logo']);
		if(Input::hasFile('logo')){
			$validator = Validator::make(Input::all(), Configs::$rules);
			$file = Input::file('logo');
       		$filename        = $file->getClientOriginalName();
			$path = realpath($destinationPath . $image_old->logo);
			if(file_exists($path) && !empty($image_old->logo)) unlink($path);
       		$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
        	$uploadSuccess   = $file->move($destinationPath, $imageName);	
        	$data->logo=$imageName;
        		if ($validator->passes()) {
    				$data->title = Input::get('title');
				    $data->description = Input::get('description');
				    $data->email = Input::get('email');
				    $data->phone = Input::get('phone');
				    $data->address = Input::get('address');
				    $data->policy = Input::get('policy');
				    $data->tutorial = Input::get('tutorial');
				    $data->popup = Input::get('popup');
				   	$data->save();
				   	return Redirect::to('admin/config/1')->with('message', 'Cập nhật thành công!');
        			}else{
        			return Redirect::to('admin/config/1')->withErrors($validator)->withInput();
        			}
		}else{
			$validator = Validator::make(Input::all(), Configs::$rules_image);
			if ($validator->passes()) {
    				$data->title = Input::get('title');
				    $data->description = Input::get('description');
				    $data->email = Input::get('email');
				    $data->phone = Input::get('phone');
				    $data->address = Input::get('address');
				    $data->policy = Input::get('policy');
				    $data->tutorial = Input::get('tutorial');
				    $data->logo = $image_old->logo;
				    $data->popup = Input::get('popup');
				   	$data->save();
				   	return Redirect::to('admin/config/1')->with('message', 'Cập nhật thành công!');
        			}else{
        			return Redirect::to('admin/config/1')->withErrors($validator)->withInput();
        			}
		}
	    
		
	}
	public function config($id=null){
		$data = Configs::findOrFail($id);
		$this->layout->content = View::make('admin.config',['title'=>'Thông tin cửa hàng'])->withData($data);
	}
}