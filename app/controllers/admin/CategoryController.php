<?php
 
class CategoryController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	public function getIndex(){
		// $comments = Category::with('products')->whereHas('products',  function($query)  {
		// 	$query->where('parent_id', '!=', '0');
		// })->get();
		$product = "";
		$num = "";
		$result = Category::with('products')->where('parent_id', '=', '0')->get();
		foreach($result as $k => $v){
			$category_child = Category::where('parent_id','=',$v->id);
			$tmp[] = $category_child->count();
			foreach($category_child->get() as $j){
				$product[$v->id][] = Product::where('category_id','=',$j->id)->count();				
			}
		}
		if($product){
		foreach($product as $n => $m){
			for($i=0; $i<count($m);$i++){
				$num += $m[$i]; 				
			}
			$product[$n] = $num;
			$num = "";
		}
		}
		$data = compact("result", "tmp","product");		
		// echo '<pre>';
		// print_r($data['product']);
		// echo '</pre>';		
		// //exit;	
		$this->layout->content = View::make('admin.category.index',['title'=>'Danh sách các lĩnh vực'])->with('data',$data)->with('menu','Danh sách lĩnh vực');
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
	public function postEdit($id = null){
		$data = Category::find($id);
		$data->name = Input::get('name');
		$data->color = Input::get('color');
		$data->icon = Input::get('icon');
		$data->save();
		return Redirect::to('admin/category')->with('message', 'Sửa thành công!');
	}
	public function getDelete($id = null){
		$data = Category::with('cate')->where('id',$id);
		foreach($data->get() as $value){
			if (count($value->cate) != 0){
				foreach($value->cate as $k => $v){
					$category = Category::find($v->id);
					$data_img = Product::where('category_id',$v->id)->get();
					foreach($data_img as $i => $j){
						Image::delete_img($j->id);
					}
					$category->delete();
				}
			}
		$data->delete();	
		}
		return Redirect::to('admin/category')->with('message', 'Xóa thành công!');
	}

	public function getListAll(){
		$data = Category::where('parent_id','!=',0)->get();
		$this->layout->content = View::make('admin.category.list',['title'=>'Danh mục sản phẩm'])->with('data',$data)->with('menu','Danh sách danh mục sản phẩm');
	}
	public function getChild($id=null){
		$data = Category::with('products')->where('parent_id', $id)->get();
		$this->layout->content = View::make('admin.category.child',['title'=>'Danh mục sản phẩm'])
		->with('data',$data)
		->with('parent',Category::find($id));
	}
	public function postEditChild($id = null){
		$data = Category::find($id);
		$data->name=Input::get("name");
		$data->save();
		return Redirect::to('admin/category/child/'.Input::get("parent_id"))->with('message', 'Sửa thành công!');
	}
	public function postEditParent($id = null){
		$data = Category::find($id);
		$data->name=Input::get("name");
		$data->save();
		return Redirect::to('admin/category/list-all')->with('message', 'Sửa thành công!');
	}
	public function getAddChild($id = null){
		$data = DB::table('categories')->where('parent_id',0)->lists('name','id');
		if($id != null) {
		$this->layout->content = View::make('admin.category.add-child',['title'=>'Thêm danh mục'])->with('data',$data)->with('parent',Category::find($id));	
		}else{
		$this->layout->content = View::make('admin.category.add-child',['title'=>'Thêm danh mục'])->with('data',$data);	
		}
	}
	public function postAddChild($id = null){
		$validator = Validator::make(Input::all(), Category::$rules_add);
		if ($validator->passes()) {
			$data = new Category;
		    $data->name  = Input::get('name');
		    $data->parent_id  = Input::get('parent_id');
		    $data->save();
		   	return Redirect::to('admin/category/child/'.Input::get('parent_id'))->with('message', 'Thêm danh mục thành công!');	
		}else{
			return Redirect::to('admin/category/add-child/'.Input::get('parent_id'))->withErrors($validator)->withInput();
		}
	}
	public function getDeleteChild($id = null,$j =null){
		$data = Category::find($id);
		$data_img = Product::where('category_id',$id)->get();
		foreach($data_img as $i => $e){
			Image::delete_img($e->id);
		}
		$data->delete();
		return Redirect::to('admin/category/child/'.$j)->with('message', 'Xóa thành công!');
	}
	public function getDeleteParent($id = null){
		$data = Category::find($id);
		$data_img = Product::where('category_id',$id)->get();
		foreach($data_img as $i => $e){
			Image::delete_img($e->id);
		}
		$data->delete();
		return Redirect::to('admin/category/list-all')->with('message', 'Xóa thành công!');
	}

	public function getTurn(){
		$this->layout->content = false;
		$category = Category::find($_GET['id']);
		if($_GET['pick'] == 0){
			$category->pick = 1;
			$category->save();
		}else{
			$category->pick = 0;
			$category->save();
		}		
		
	}


}