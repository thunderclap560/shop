<?php 
class PagesController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	// if(isset(Auth::user()->status) != 1){
    	// 	echo 'Bạn không có quyền truy cập !';
    	// 	exit;
    	// }
	}
	public function getIndex(){
		$data = Page::all();
		$this->layout->content = View::make('admin.page.index',['title'=>'Danh sách trang'])->with('data',$data);
	}
	public function getAdd(){
		$this->layout->content = View::make('admin.page.add',['title'=>'Thêm trang']);
	}
	public function getEdit($id = null){
		$data = Page::find($id);
		$this->layout->content = View::make('admin.page.edit',['title'=>'Sửa trang'])->with('data',$data);
	}
	public function getDelete($id=null){
		$data = Page::find($id);			
		$data->delete();
		return Redirect::to('admin/pages')->with('message', 'Xóa trang thành công!');	
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
	public function postEdit($id = null){
		$validator = Validator::make(Input::all(), Page::$rules);
		if ($validator->passes()) {
		$data = Page::find($id);	
		$data->name  = Input::get('name');
		$data->alias = $this->alias_change(Input::get('name'));
		$data->content  = Input::get('content');
		$data->save();
		 	return Redirect::to('admin/pages')->with('message', 'Sửa trang thành công!');	
		}else{
			return Redirect::to('admin/pages/edit/'.$id)->withErrors($validator)->withInput();
		}
	}
	public function postCreate(){
		$validator = Validator::make(Input::all(), Page::$rules);
		if ($validator->passes()) {
	    		$data = new Page;
			    $data->name  = Input::get('name');
			    $data->content  = Input::get('content');
			    $data->alias = $this->alias_change(Input::get('name'));
			    $data->save();
			    return Redirect::to('admin/pages')->with('message', 'Thêm trang thành công!');	

		}else{
				return Redirect::to('admin/pages/add')->withErrors($validator)->withInput();
		}
	}
}
?>