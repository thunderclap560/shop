<?php 
class CouponController extends BaseController {

	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	public function getIndex(){
		$data = Coupon::all();
		$this->layout->content = View::make('admin.coupon.index',['title'=>'Danh sách coupon'])->with('data',$data);
	}
	public function postAdd(){
		$validator = Validator::make(Input::all(), Coupon::$rules);
	if ($validator->passes()) {
		$data = new Coupon;
		$data->code = Input::get('code');
		$data->value = Input::get('value');
		$data->save();
		return Redirect::to('admin/coupon')->with('message', 'Thêm coupon thành công!');	
	}else{
		return Redirect::to('admin/coupon')->withErrors($validator)->withInput();
	}
	}
	public function getDelete($id = null){
		$data = Coupon::find($id);
		$data->delete();
		return Redirect::to('admin/coupon')->with('message', 'Xóa coupon thành công!');
	}
	public function postEdit($id=null){
		$validator = Validator::make(Input::all(), Coupon::$rules);
	if ($validator->passes()) {
		$data = Coupon::find($id);
		$data->code = Input::get('code');
		$data->value = Input::get('value');
		$data->save();
		return Redirect::to('admin/coupon')->with('message', 'Cập nhật coupon thành công!');	
	}else{
		return Redirect::to('admin/coupon')->withErrors($validator)->withInput();
	}
	}
}
?>