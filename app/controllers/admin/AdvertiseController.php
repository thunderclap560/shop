<?php
 
class AdvertiseController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
	}
	public function getIndex(){

	$data = Advertises::with('category')->get();
	// echo '<pre>';
	// print_r($data);
	// echo '</pre>';
	// exit;
	$this->layout->content = View::make('admin.advertise.index',['title'=>'Khuyến Mãi'])
	->with('data',$data);
	}
	public function getAdd(){
		$categories = DB::table('advertise')->where('parent_id',1)->get();
		$product = [''=>'-- Chọn sản phẩm khuyến mãi --'] + DB::table('products')->where('sales',1)->lists('name','id');
		$this->layout->content = View::make('admin.advertise.add',['title'=>'Khuyến Mãi'])->with('categories',$categories)->with('product',$product);
	}
	public function getDelete($id = null){
		$data = Advertises::find($id);
		$image_old = $data->name;
		$destinationPath = public_path().'/upload/image/';			
		$path = realpath($destinationPath . $image_old);
		if(file_exists($path) && !empty($image_old)) unlink($path);
		$data->category()->detach();
		$data->delete();
		return Redirect::to('admin/adver')->with('message', 'Xóa thành công!');
	}
	public function getEdit($id = null){
		$data = Advertises::with('category')->find($id);
		$cate = DB::table('category_advertise')
        ->join('advertise', 'advertise.id', '=', 'category_advertise.advertises_id')
        ->join('categories', 'categories.id', '=', 'category_advertise.category_id')
        ->where('category_advertise.advertises_id',$id)->get();
        $tmp = array();
        for($i = 0; $i < count($cate); $i++){
        	$tmp[] = $cate[$i]->id;
        }      
		$categories = DB::table('categories')->where('parent_id',0)->lists('name','id');	
		$this->layout->content = View::make('admin.advertise.edit',['title'=>'Sửa hình ảnh'])->with('data',$data)->with('category',$categories)->with('cate',$tmp);
	}
	public function postEdit($id = null){
		$data = Advertises::find($id);
		$image_old = $data->image;
		$destinationPath = public_path().'/upload/image/';			
		$validator = Validator::make(Input::all(), Advertises::$rules);
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
		$data->link  = Input::get('link');
		if($id == 1)
		{
			$data->type = null ;
			$data->parent_id = 1 ;
		}elseif($data->type == 2){
			$data->type = 2 ;
			$data->parent_id = 1 ;
		}else{
			$data->type = 1 ;
		}	
		$data->save();		
		$data->category()->sync(Input::get('categories'));
		return Redirect::to('admin/adver')->with('message', 'Cập nhật thành công!');
		

	}
	public function postAdd(){
			$validator = Validator::make(Input::all(), Advertises::$rules);
	if ($validator->passes()) {
			$files = Input::file('image');
			$destinationPath = public_path().'/upload/image/';
			$filename  = $files->getClientOriginalName();
			$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
    		$uploadSuccess   = $files->move($destinationPath, $imageName);
    		$data = new Advertises;
    		$data->image = $imageName;
		    $data->link  = Input::get('link');
		    if(Input::get('product_id') != null){
		    	$product = Product::find(Input::get('product_id'));
		    	$data->price_sales = $product->price_sales;
		    	$data->price = $product->price;
		    	$data->name = $product->name;
		    	$data->short_detail = $product->short_detail;
		    	$data->alias = $product->alias;
		    }
		    $data->product_id  = Input::get('product_id');
		    $data->type = Input::get('type');
		    $data->save();

		    return Redirect::to('admin/adver')->with('message', 'Thêm hình khuyến mãi thành công!');	

	}else{
			return Redirect::to('admin/adver')->withErrors($validator)->withInput();
	}
	}
}
?>