<?php
 
class BannerController extends BaseController {

	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	public function index(){

		$data = Banners::where('parent_id','=',0)->get();
		$this->layout->content = View::make('admin.banner',['title'=>'Blocks khuyến mãi'])->withData($data);
	}
	public function create(){
		$validator = Validator::make(Input::all(), Banners::$rules);
   	if ($validator->passes()) {
        $banner = new Banners;
	    $banner->name = Input::get('name');
	    $banner->parent_id = Input::get('parent_id');
	    $banner->save();
	    return Redirect::to('admin/banner')->with('message', 'Tạo danh mục thành công!');
    } else {
        return Redirect::to('admin/banner')->withErrors($validator)->withInput();
 
    }
	}
	public function edit($id = null){
		$data = Banners::findOrFail($id);
		$this->layout->content = View::make('admin.edit',['title'=>'Cập nhật danh mục'])->withData($data);
	}
	public function delete($id = null){
		$data = Banners::whereRaw('id ='.$id.' or parent_id = '.$id)->get();
		
		foreach($data as $k => $v){
			$image_old = $v->name;
			$destinationPath = public_path().'/upload/image/';
			$path = realpath($destinationPath . $image_old);
			if(file_exists($path) && !empty($image_old)) unlink($path);
			$user = Banners::find($v->id);
			$user->delete();
		 }
		return Redirect::to('admin/banner/')->with('message', 'Xóa thành công!');
	}
	public function update(){
		$data  =  Banners::find(Input::get('id'));
		$validator = Validator::make(Input::all(), Banners::$rules);
			if ($validator->passes()) {
    				$data->name = Input::get('name');
				    $data->parent_id = Input::get('parent_id');
				   	$data->save();
				   	return Redirect::to('admin/banner/')->with('message', 'Cập nhật thành công!');
        			}else{
        			return Redirect::to('admin/banner/edit/'.Input::get('id'))->withErrors($validator)->withInput();
        			}
	}
	public function view($id = null){
			$data = Banners::where('parent_id','=',$id)->get();
			$data2 = Banners::find($id);
			$this->layout->content = View::make('admin.banner_view',['title'=>'Danh sách hình ảnh'])->withData($data)->with('data2',$data2);
	}
	public function upload($id = null){
			$files = Input::file('images');
			$destinationPath = public_path().'/upload/image/';
			foreach($files as $key => $file){
				$rules = array('name' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
	      		$validator = Validator::make(array('name'=> $file), $rules);
	      		if($validator->passes()){
					$filename  = $file->getClientOriginalName();
					$imageType = explode('.',$filename);
					$imageType = $imageType[count($imageType)-1];
					$imageName = md5(uniqid()).'.'.$imageType;
	        		$uploadSuccess   = $file->move($destinationPath, $imageName);
	        		$data = new Banners;
	        		$data->name = $imageName;
				    $data->link  = null ;
				    $data->parent_id  = $id;
				   	$data->save();
	        	}
			}
			return Redirect::to('admin/banner/view/'.$id)->with('message', 'Thêm hình thành công!');	

	}
	public function update_image($id=null){
		$data = Banners::findOrFail($id);
		$data->link = Input::get('link');
		$data->save();
		return Redirect::to('admin/banner/view/'.$data->parent_id)->with('message', 'Cập nhật thành công!');	
	}
	public function delete_image($id = null,$key = null){
		$data = Banners::findOrFail($id);
		$image_old = $data->name;
		$destinationPath = public_path().'/upload/image/';
		$path = realpath($destinationPath . $image_old);
		if(file_exists($path) && !empty($image_old)) unlink($path);
		$data->delete();
		return Redirect::to('admin/banner/view/'.$key)->with('message', 'Xóa thành công!');
	}
}

?>