<?php 
class BlocksController extends BaseController {

	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}

	public function index(){
		$data = Block::all();
		$this->layout->content = View::make('admin.block.index',['title'=>'Quản lí banner'])->with('data',$data);
	}
	public function upload(){
			$link = Input::get('link');
			$files = Input::file('images');
			$destinationPath = public_path().'/upload/image/';
			foreach($files as $key => $file){
					$filename  = $file->getClientOriginalName();
					$imageType = explode('.',$filename);
					$imageType = $imageType[count($imageType)-1];
					$imageName = md5(uniqid()).'.'.$imageType;
	        		$uploadSuccess   = $file->move($destinationPath, $imageName);
	        		$data = new Block;
	        		$data->name = $imageName;
				    $data->link  = $link[$key];
				    $data->position  = Input::get('position');
				   	$data->save();
	        	
			}
			return Redirect::to('admin/blocks')->with('message', 'Thêm hình thành công!');	

	}
	public function update($id=null){
		$data = Block::find($id);
		$data->link = Input::get('link');
		 $data->position  = Input::get('position');
		if ($data->save()){
		return Redirect::to('admin/blocks')->with('message', 'Cập nhật thành công!');	
		}

	}

	public function delete($id=null){
		$data = Block::find($id);
		$data->delete();
		return Redirect::to('admin/blocks')->with('message', 'Xóa hình thành công!');
	}
}
?>