<?php 
class NewsController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}
	public function getIndex(){
		$data = News::all();
		$this->layout->content = View::make('admin.new.index',['title'=>'Danh sách tin tức'])->with('data',$data);
	}
	public function getAdd(){
		$this->layout->content = View::make('admin.new.add',['title'=>'Thêm tin tức']);
	}
	public function getEdit($id = null){
		$data = News::find($id);
		$this->layout->content = View::make('admin.new.edit',['title'=>'Sửa tin tức'])->with('data',$data);
	}
	public function getDelete($id=null){
		$data = News::find($id);
		$image_old = $data->image;
		$destinationPath = public_path().'/upload/image/';			
		$path = realpath($destinationPath . $image_old);
		if(file_exists($path) && !empty($image_old)) unlink($path);
		$data->delete();
		return Redirect::to('admin/news')->with('message', 'Xóa tin tức thành công!');	
	}
	public function postEdit($id = null){
		$data = News::find($id);
		$image_old = $data->image;
		$destinationPath = public_path().'/upload/image/';			
		$validator = Validator::make(Input::all(), News::$rules);
		if ($validator->passes()) {
			$path = realpath($destinationPath . $image_old);
			if(file_exists($path) && !empty($image_old)) unlink($path);
			$files = Input::file('image');
			$filename  = $files->getClientOriginalName();
			$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
    		$uploadSuccess   = $files->move($destinationPath, $imageName);
    		$data->image = $imageName;		
		}else{						
			$data->image = $image_old;			
		}
		$data->title  = Input::get('title');
		$data->content  = Input::get('content');
		$data->save();
		 return Redirect::to('admin/news')->with('message', 'Sửa tin tức thành công!');	

	}
	public function postCreate(){
		$validator = Validator::make(Input::all(), News::$rules);
	if ($validator->passes()) {
			$files = Input::file('image');
			$destinationPath = public_path().'/upload/image/';
			$filename  = $files->getClientOriginalName();
			$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
    		$uploadSuccess   = $files->move($destinationPath, $imageName);
    		$data = new News;
    		$data->image = $imageName;
		    $data->title  = Input::get('title');
		    $data->content  = Input::get('content');
		    $data->save();
		    return Redirect::to('admin/news')->with('message', 'Thêm tin tức thành công!');	

	}else{
			return Redirect::to('admin/news/add')->withErrors($validator)->withInput();
	}
}
}
?>