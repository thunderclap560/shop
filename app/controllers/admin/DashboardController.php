<?php
 
class DashboardController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}
	
	public function index(){
		$this->layout->content = View::make('admin.index');
	}
	public function update(){
		$data  =  Configs::find(1);
		$image_old = $data->first(['logo']);
		if(Input::hasFile('logo')){
			$validator = Validator::make(Input::all(), Configs::$rules);
			$file = Input::file('logo');
			$destinationPath = public_path().'/upload/image/';
       		$filename        = $file->getClientOriginalName();
       		// echo '<pre>';
       		// print_r($image_old->logo);
       		// echo '</pre>';
       		// exit;
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