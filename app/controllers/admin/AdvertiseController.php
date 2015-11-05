<?php
 
class AdvertiseController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}
	public function getIndex(){

	$data = Advertises::all();
	$this->layout->content = View::make('admin.advertise.index',['title'=>'Khuyến Mãi'])
	->with('data',$data);
	}
	public function getAdd(){
		$this->layout->content = View::make('admin.advertise.add',['title'=>'Khuyến Mãi']);
	}
	public function postAdd(){
			$validator = Validator::make(Input::all(), Advertises::$rules);
	if ($validator->passes()) {
			$files = Input::file('image');
			$destinationPath = public_path().'/upload/image/';
			$filename  = $files->getClientOriginalName();
			$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
    		$uploadSuccess   = $files->move($destinationPath, $imageName);
    		$data = new Advertises;
    		$data->image = $imageName;
		    $data->link  = Input::get('link');
		    $data->save();
		    return Redirect::to('admin/adver')->with('message', 'Thêm hình khuyến mãi thành công!');	

	}else{
			return Redirect::to('admin/adver')->withErrors($validator)->withInput();
	}
	}
}
?>