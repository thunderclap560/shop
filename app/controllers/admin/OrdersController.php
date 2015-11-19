<?php
 
class OrdersController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}

	public function getIndex(){
	$data = Order::with('users')->get();
	$this->layout->content = View::make('admin.order.index',['title'=>'Danh sách đơn hàng'])->with('data',$data);
	}

	public function getValid(){
		$data = Order::find($_GET['data']);
		$data->valid = $_GET['value'];
		$data->save();
		$this->layout->content = false;
	}

	public function getDetail($id=null){
	$data = Detail::with(['orders','products'])->whereOrder_id($id)->get();
	$this->layout->content = View::make('admin.order.detail',['title'=>'Chi tiết đơn hàng'])->with('data',$data);
	}

	public function getContact($id=null){
	$data = Order::with('users')->where('id',$id)->get();
	$this->layout->content = View::make('admin.product.contact',['title'=>'Khách đặt hàng'])->with('data',$data);
	}

	public function getDelete($id = null){
	$data = Order::find($id);
	$data->detail()->delete();
	$data->delete();
	return Redirect::to('admin/order')->with('message', 'Xóa đơn hàng thành công!');	
	}

}
?>