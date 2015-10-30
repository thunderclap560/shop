<?php
 
class CategoryController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
	}

	public function getIndex(){
		// $comments = Category::with('products')->whereHas('products',  function($query)  {
		// 	$query->where('parent_id', '!=', '0');
		// })->get();
		// foreach($comments as $k => $v){
		// 	foreach($v->products as $i => $j){
		// echo '<pre>';
		// print_r($j-);
		// echo '</pre>';
		// 	}	
		
		// }

		//echo count($comments);
		$result = Category::with('products')->where('parent_id', '=', '0')->get();
		// foreach($comments as $k => $v){
		// }
		
		//$result = Category::where('parent_id','=',0)->get();
		foreach($result as $k => $v){
			$tmp[] = Category::where('parent_id','=',$v->id)->count();
		}
		$data = compact("result", "tmp");
		$this->layout->content = View::make('admin.category.index',['title'=>'Danh mục sản phẩm'])->with('data',$data);
	}
	public function postCreate(){
		$banner = new Category;
	    $banner->name = Input::get('name');
	    $banner->parent_id = Input::get('parent_id');
	    $banner->color = Input::get('color');
	    $banner->icon = Input::get('icon');
	    $banner->save();
	    return Redirect::to('admin/category')->with('message', 'Tạo thành công!');
	}

	public function postAdd($id= null){
		$banner = new Category;
	    $banner->name = Input::get('name');
	    $banner->parent_id = $id;
	    $banner->color = null;
	    $banner->icon = null;
	    $banner->save();
	    return Redirect::to('admin/category')->with('message', 'Tạo thành công!');
	}

}