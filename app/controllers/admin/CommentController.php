<?php 
class CommentController extends BaseController {

	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	
	public function getIndex(){
	$data = Product::with(['comment','comment.users','comment.allReplies'])->get();
	// foreach($data as $k => $v){
	// $this->recusive($v->comment);
	// }
	$this->layout->content = View::make('admin.comment.index',['title'=>'Danh sách phản hồi'])->with('data',$data);
	}
}