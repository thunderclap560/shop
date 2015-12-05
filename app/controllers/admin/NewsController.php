<?php 
class NewsController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	function alias_change($str){
			$unicode = array(
				'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
				'd'=>'đ',
				'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'i'=>'í|ì|ỉ|ĩ|ị',
				'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
				'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
				'D'=>'Đ',
				'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
				'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
				'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
				'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);

			foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
			}
			$str = strtolower(trim($str));
			return str_replace(' ','-',$str);
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
		$data->alias = $this->alias_change(Input::get('title'));
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
		    $data->alias = $this->alias_change(Input::get('title'));
		    $data->save();
		    return Redirect::to('admin/news')->with('message', 'Thêm tin tức thành công!');	

	}else{
			return Redirect::to('admin/news/add')->withErrors($validator)->withInput();
	}
}
}
?>