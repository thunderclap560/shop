<?php
 
class ProductController extends BaseController {
	
	protected $layout = "layouts.admin";

	public function __construct(){
    	$this->beforeFilter('auth');
    	if(isset(Auth::user()->status) != 1){
    	if ( Request::segment(3) == null || Request::segment(3) == 'add' || Request::segment(3) == 'create' || Request::segment(3) == 'edit'){
    		
    	}else{
    		echo 'Bạn không có quyền truy cập !';
    		exit;
    	}
    }
	}

	public function getTurn(){
		$this->layout->content = false;
		$category = Product::find($_GET['id']);
		if($_GET['pick'] == 0){
			$category->pick = 1;
			$category->save();
		}else{
			$category->pick = 0;
			$category->save();
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
		$data = Product::orderBy('id','desc')->get();
		$this->layout->content = View::make('admin.product.index',['title'=>'Danh sách sản phẩm'])->with('data',$data);
	}
	public function getAdd(){
		$categories = DB::table('categories')->where('parent_id','!=',0)->lists('name','id');
		$this->layout->content = View::make('admin.product.add',['title'=>'Thêm sản phẩm'])->with('categories',$categories);
	}
	public function getEdit($id=null){
		$data = Product::find($id);
		$categories = DB::table('categories')->where('parent_id','!=',0)->lists('name','id');
		$image = DB::table('images')->where('product_id',$id)->get();
		$color = DB::table('colors')->where('product_id',$id)->get();
		$this->layout->content = View::make('admin.product.edit',['title'=>'Sửa sản phẩm'])->with('data',$data)->with('categories',$categories)->with('image',$image)->with('color',$color);

	}
	public function getDel(){
		$data = Color::find($_GET['id']);
		$data->delete();
		$this->layout = null;
	}
	public function getDelete($id=null){
			$data = Product::find($id);
			Image::delete_img($id);
			$data->image()->delete();
			$data->color()->delete();
			$data->order()->delete();
			$data->delete();
			return Redirect::to('admin/product')->with('message', 'Xóa sản phẩm thành công!');	
	}
	public function postEdit($id=null){
		
		if (Input::has('color'))
			{
			$color = Input::get('color'); 	
			foreach($color as $kcolor => $vcolor){
					if($vcolor !=  null){
						$data_color = new Color;
		        		$data_color->name = $vcolor;
					    $data_color->product_id  = 	$id ;
					   	$data_color->save();
				   	}			
			}
		}
		$data = Product::find($id);
		$image_old = $data->image;
		$destinationPath = public_path().'/upload/image/';			
		$validator = Validator::make(Input::all(), Product::$rules);
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
		$data->name  = Input::get('name');
	    $data->code  = Input::get('code');
	    $data->price  = Input::get('price');
	    $data->status  = Input::get('status');
	  	$data->long_detail  = Input::get('long_detail');
	    $data->short_detail  = Input::get('short_detail');
	    $data->sales  = Input::get('sales');
	    $data->feature  = Input::get('feature');
	    $data->category_id  = Input::get('category_id');
	    $data->size  = Input::get('size');
	    $data->sales  = Input::get('sales');
	    $data->alias = $this->alias_change(Input::get('name'));
	    if($data->sales == 1){
		    if(Input::get('price_sales')){
		    	$data->price_sales  = Input::get('price_sales');
		    }
		}else{
			$data->price_sales = null;
		}
		$data->pick = 0;
	    $data->feature  = Input::get('feature');
	   	$data->save();

	   		if(Input::hasFile('images')){ 
	   		Image::delete_img($id);  
	   		$data->image()->delete();
    		$image_detail = Input::file('images');
		   	foreach($image_detail as $key => $file){
					$filenames  = $file->getClientOriginalName();
					$imageTypes = explode('.',$filenames);
					$imageTypes = $imageTypes[count($imageTypes)-1];
					$imageNames = md5(uniqid()).'.'.$imageTypes;
	        		$uploadSuccesss   = $file->move($destinationPath, $imageNames);
	        		$data_image = new Image;
	        		$data_image->name = $imageNames;
				    $data_image->product_id  = $id;
				   	$data_image->save();
			}	
    	}				 		
		return Redirect::to('admin/product')->with('message', 'Cập nhật sản phẩm thành công!');	

	}
	public function postCreate(){
			$validator = Validator::make(Input::all(), Product::$rules);
	if ($validator->passes()) {
			$files = Input::file('image');
			$destinationPath = public_path().'/upload/image/';
			$filename  = $files->getClientOriginalName();
			$imageType = explode('.',$filename);
			$imageType = $imageType[count($imageType)-1];
			$imageName = md5(uniqid()).'.'.$imageType;
    		$uploadSuccess   = $files->move($destinationPath, $imageName);
    		$data = new Product;
    		$data->image = $imageName;
		    $data->name  = Input::get('name');
		    $data->code  = Input::get('code');
		    $data->price  = Input::get('price');
		    $data->status  = Input::get('status');
		  	$data->long_detail  = Input::get('long_detail');
		    $data->short_detail  = Input::get('short_detail');
		    $data->category_id  = Input::get('category_id');
		    $data->size  = Input::get('size');
		    $data->sales  = Input::get('sales');
		    $data->pick = 0;
		    $data->alias = $this->alias_change(Input::get('name'));
		    if(Input::get('price_sales')){
	    	$data->price_sales  = Input::get('price_sales');
	    }
	    	$data->feature  = Input::get('feature');
		   	$data->save();
		   	$max_id = DB::table('products')->max('id');
		   	$images = Input::file('images');
		   	foreach($images as $key => $file){
					$filenames  = $file->getClientOriginalName();
					$imageTypes = explode('.',$filenames);
					$imageTypes = $imageTypes[count($imageTypes)-1];
					$imageNames = md5(uniqid()).'.'.$imageTypes;
	        		$uploadSuccesss   = $file->move($destinationPath, $imageNames);
	        		$data_image = new Image;
	        		$data_image->name = $imageNames;
				    $data_image->product_id  = 	$max_id;
				   	$data_image->save();
	        	
			}
			//color
			$color = Input::get('color');
			if($color){
			foreach($color as $kcolor => $vcolor){
				if(!empty($vcolor)){
					$data_color = new Color;
	        		$data_color->name = $vcolor;
				    $data_color->product_id  = 	$max_id ;
				   	$data_color->save();
				   	}
			}
			}
		   	return Redirect::to('admin/product')->with('message', 'Thêm sản phẩm thành công!');	
		   	}else{
		   		return Redirect::to('admin/product/add')->withErrors($validator)->withInput();
		   	}
	        	
			
	}
}
