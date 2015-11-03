	<?php  
	
	//$seg = Request::segment(3);

	Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', URL::to('admin/dashboard'));
	});

	$seg = Request::segment(2);
	if(isset($seg)){
		switch ($seg) {
		    case "product":
 					Breadcrumbs::register('blog', function($breadcrumbs) {
		   				$breadcrumbs->parent('home');	
			        	$breadcrumbs->push('Danh sách sản phẩm', URL::to('admin/category'));
	        	});
	        	if(Request::segment(3) == 'list-all'){
		        	Breadcrumbs::register('sub', function($breadcrumbs) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push('Danh sách danh mục', URL::to('admin/news/add'));
		        	});
	        	}
	        	if(Request::segment(3) == 'child'){

		        	Breadcrumbs::register('sub', function($breadcrumbs,$data) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push($data->name);
		        	});
	        	}
	        	if(Request::segment(3) == 'edit'){
		        	Breadcrumbs::register('sub', function($breadcrumbs,$data) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push($data->title);
		        	});
	        	}
		        break;
		   	case "category":
		        Breadcrumbs::register('blog', function($breadcrumbs) {
		   				$breadcrumbs->parent('home');	
			        	$breadcrumbs->push('Danh sách lĩnh vực', URL::to('admin/category'));
	        	});
	        	if(Request::segment(3) == 'list-all'){
		        	Breadcrumbs::register('sub', function($breadcrumbs) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push('Danh sách danh mục', URL::to('admin/news/add'));
		        	});
	        	}
	        	if(Request::segment(3) == 'edit'){
		        	Breadcrumbs::register('sub', function($breadcrumbs,$data) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push($data->title);
		        	});
	        	}
		        break;
	        case "banner":
	        	$breadcrumbs->push('Danh sách danh mục khuyến mãi', URL::to('admin/banner'));
	        break;
	        case "config":
	        	$breadcrumbs->push('Thông tin cửa hàng', URL::to('admin/config/1'));
	        break;
	        case "blocks":
	        	$breadcrumbs->push('Trình chiếu ảnh', URL::to('admin/blocks'));
	        break;
	        case "order":
	        	Breadcrumbs::register('blog', function($breadcrumbs) {
		   				$breadcrumbs->parent('home');	
			        	$breadcrumbs->push('Danh sách đơn hàng', URL::to('admin/news'));
	        	});
	        	if(Request::segment(3) == 'add'){
		        	Breadcrumbs::register('sub', function($breadcrumbs) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push('Thêm tin tức', URL::to('admin/news/add'));
		        	});
	        	}
	        	if(Request::segment(3) == 'edit'){
		        	Breadcrumbs::register('sub', function($breadcrumbs,$data) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push($data->title);
		        	});
	        	}
	        break;
	        case "comment":
	        	$breadcrumbs->push('Danh sách phản hồi', URL::to('admin/comment'));
	        break;
	        case "news":
	        		Breadcrumbs::register('blog', function($breadcrumbs) {
		   				$breadcrumbs->parent('home');	
			        	$breadcrumbs->push('Danh sách tin tức', URL::to('admin/news'));
	        	});
	        	if(Request::segment(3) == 'add'){
		        	Breadcrumbs::register('sub', function($breadcrumbs) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push('Thêm tin tức', URL::to('admin/news/add'));
		        	});
	        	}
	        	if(Request::segment(3) == 'edit'){
		        	Breadcrumbs::register('sub', function($breadcrumbs,$data) {
		   				$breadcrumbs->parent('blog');	
			        	$breadcrumbs->push($data->title);
		        	});
	        	}
	        break;
		    default:
		        echo "Your favorite color is neither red, blue, nor green!";
		}
		}
	
?>
<?php 
if(Request::segment(2) && empty(Request::segment(3)) ){
	
	echo Breadcrumbs::render('blog');

}elseif(Request::segment(3) && empty(Request::segment(4) )){

	echo Breadcrumbs::render('sub');
}elseif(Request::segment(4)){

	echo Breadcrumbs::render('sub',$data);
}
?>

